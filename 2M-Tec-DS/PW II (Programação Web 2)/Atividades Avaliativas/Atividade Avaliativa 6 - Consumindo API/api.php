<?php
declare(strict_types=1); // Exige os tipos declarados nas chamadas feitas por este arquivo.
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');

function responder(array $dados, int $status = 200): never { // Cria uma função que envia dados e um código HTTP; never indica que ela encerra a execução.
    http_response_code($status);
    echo json_encode($dados, JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR); // Converte o array PHP em JSON, mantém acentos legíveis e lança erro se a conversão falhar.
    exit;
}

function consultar(string $url): array {
    if (!function_exists('curl_init')) { // Verifica se a extensão cURL, usada para requisições HTTP, está disponível.
        throw new RuntimeException('Extensão cURL indisponível.');
    }
    $curl = curl_init($url); // Prepara a conexão com o endereço recebido.
    curl_setopt_array($curl, [ // Configura a requisição; por padrão, esta consulta usa GET.
        CURLOPT_RETURNTRANSFER => true, // Guarda a resposta em uma variável em vez de imprimi-la diretamente.
        CURLOPT_CONNECTTIMEOUT => 5, // Permite até 5 segundos para estabelecer a conexão.
        CURLOPT_TIMEOUT => 12, // Limita a duração total desta requisição a 12 segundos.
        CURLOPT_HTTPHEADER => ['Accept: application/json'], // Informa à API que esperamos receber JSON.
    ]);
    $resposta = curl_exec($curl); // Executa a requisição HTTP e recebe o corpo da resposta ou false em caso de falha.
    $status = curl_getinfo($curl, CURLINFO_HTTP_CODE); // Lê o código HTTP devolvido pela API.
    if ($resposta === false || $status !== 200) { 
        throw new RuntimeException('Falha na consulta externa.');
    }
    $dados = json_decode($resposta, true, 512, JSON_THROW_ON_ERROR); // Converte JSON em array associativo; 512 limita a profundidade e JSON inválido gera exceção.
    if (!is_array($dados) || !empty($dados['error'])) { // Rejeita uma resposta que não seja um array ou que informe erro.
        throw new RuntimeException('Resposta externa inválida.'); // Sinaliza que a API devolveu dados que não podem ser usados.
    }
    return $dados; // Entrega os dados processados para quem chamou consultar().
}

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    header('Allow: GET');
    responder(['erro' => 'Utilize uma requisição GET.'], 405);
}
$cidade = $_GET['cidade'] ?? ''; // Lê cidade na URL; ?? usa texto vazio quando o parâmetro está ausente.
if (!is_string($cidade) || strlen(trim($cidade)) < 2 || strlen($cidade) > 160 || preg_match('//u', $cidade) !== 1) {
    responder(['erro' => 'Informe uma cidade com pelo menos 2 caracteres (até 160 bytes).'], 400);
}
try {
    // 1. Converte o nome pesquisado em latitude e longitude.
    $busca = consultar('https://geocoding-api.open-meteo.com/v1/search?' . http_build_query([ // Monta a URL de geocodificação; http_build_query codifica os parâmetros para a URL.
        'name' => trim($cidade), 'count' => 1, 'language' => 'pt', 'format' => 'json', 
    ]));
    $local = $busca['results'][0] ?? null;
    if (!$local) {
        responder(['erro' => 'Cidade não encontrada. Confira a grafia ou tente uma cidade próxima.'], 404); 
    }
    if (!isset($local['latitude'], $local['longitude'], $local['name'])) {
        throw new RuntimeException('Localização incompleta.'); 
    }
    // 2. Obtém o JSON da previsão usando as coordenadas da cidade.
    $previsao = consultar('https://api.open-meteo.com/v1/forecast?' . http_build_query([ // Consulta o serviço meteorológico da Open-Meteo usando parâmetros codificados.
        'latitude' => $local['latitude'], 'longitude' => $local['longitude'], // Envia as coordenadas obtidas na primeira consulta.
        'current' => 'temperature_2m,relative_humidity_2m,wind_speed_10m', // Solicita temperatura e umidade a 2 m de altura e velocidade do vento a 10 m.
        'timezone' => 'auto', // Pede o fuso horário correspondente à localização consultada.
        'temperature_unit' => 'celsius', 'wind_speed_unit' => 'kmh', // Define Celsius para temperatura e quilômetros por hora para vento.
    ]));
    $atual = $previsao['current'] ?? []; // Separa as condições atuais; usa um array vazio se current não existir.
    if (!isset($atual['time'], $previsao['timezone'])) { // Exige horário de referência e fuso para apresentar os dados corretamente.
        throw new RuntimeException('Previsão incompleta.'); // Sinaliza uma resposta meteorológica incompleta.
    }
    foreach (['temperature_2m', 'relative_humidity_2m', 'wind_speed_10m'] as $campo) { // Percorre os nomes das três medidas que serão exibidas.
        if (!is_numeric($atual[$campo] ?? null)) throw new RuntimeException('Medição indisponível.'); // Rejeita medidas ausentes ou não numéricas; o valor zero continua válido.
    }
    
    responder([
        'local' => implode(', ', array_filter([$local['name'], $local['admin1'] ?? '', $local['country'] ?? ''])), 
        'horario' => $atual['time'], 'fuso' => $previsao['timezone'],
        'temperatura' => $atual['temperature_2m'],
        'umidade' => $atual['relative_humidity_2m'], 'vento' => $atual['wind_speed_10m'], 
    ]);
} catch (Throwable $erro) { 
    error_log('Open-Meteo: ' . $erro->getMessage());
    responder(['erro' => 'Não foi possível consultar a previsão agora. Tente novamente em alguns instantes.'], 502);
}
