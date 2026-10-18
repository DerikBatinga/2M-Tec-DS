const formulario = document.querySelector('#formulario');
const status = document.querySelector('#status');
const resultado = document.querySelector('#resultado');
const botao = document.querySelector('#consultar');

const numero = valor => new Intl.NumberFormat('pt-BR', { maximumFractionDigits: 1 }).format(valor); // Cria uma função que formata números em português, com vírgula e até uma casa decimal.

const escrever = (id, texto) => { 
  document.getElementById(id).textContent = texto; 
}; 

formulario.addEventListener('submit', async evento => {
  evento.preventDefault(); //  evita recarregar a página.
  const cidade = document.querySelector('#cidade').value.trim();
  resultado.hidden = true; // Oculta resultados anteriores antes de iniciar outra consulta.
  status.className = ''; // Remove o estilo de erro que possa ter sido aplicado na busca anterior.
  if (cidade.length < 2) {
    status.textContent = 'Digite pelo menos 2 caracteres para pesquisar.'; 
    return;
  }
  botao.disabled = true;
  botao.textContent = 'Consultando…'; 
  resultado.setAttribute('aria-busy', 'true'); // Informa às tecnologias assistivas que esta região está sendo atualizada.
  status.textContent = 'Buscando a cidade e consultando a previsão…';
  const controlador = new AbortController();
  const limite = setTimeout(() => controlador.abort(), 30000);
  try {
    const resposta = await fetch(
      `api.php?${new URLSearchParams({ cidade })}`, { signal: controlador.signal } // Codifica o nome da cidade na URL e associa o sinal que permite cancelar a consulta.
    );
    const dados = await resposta.json();

    if (!resposta.ok) throw new Error(dados.erro || 'Não foi possível consultar a previsão.');
    escrever('local', dados.local);

    escrever('temperatura', numero(dados.temperatura));

    escrever('umidade', `${numero(dados.umidade)}%`);

    escrever('vento', `${numero(dados.vento)} km/h`);

    const [data, hora] = dados.horario.split('T'); // Separa a data e a hora no T do formato recebido, como 2026-10-16T10:00.

    escrever('horario', `Referência: ${data.split('-').reverse().join('/')} às ${hora} · ${dados.fuso}`); // Converte ano-mês-dia em dia/mês/ano e mostra a hora e o fuso, sem converter para o horário do computador.

    resultado.hidden = false;

    status.textContent = `Previsão carregada para ${dados.local}.`;

  } catch (erro) {

    status.className = 'erro';

    status.textContent = erro.name === 'AbortError' //AbortError identifica um cancelamento.

      ? 'A consulta demorou demais. Tente novamente
      : erro instanceof TypeError || erro instanceof SyntaxError // Verifica falhas de conexão (TypeError) ou de interpretação do JSON (SyntaxError).
      ? 'Não foi possível acessar o servidor. Verifique a conexão e se o PHP está em execução.' 
       : erro.message;
  } 
  finally {
    clearTimeout(limite); // Cancela o temporizador, pois a operação já terminou.
    botao.disabled = false;
    botao.textContent = 'Consultar ↗';
    resultado.setAttribute('aria-busy', 'false'); 
  }
});
