# DomEarth

Atividade escolar: consulta de condições atuais por cidade, com **PHP no backend**, HTML, CSS e JavaScript. Sem banco de dados, frameworks, Composer ou cadastro de usuário.


## Como executar

Requisitos: PHP **8.1 ou superior**, extensão **cURL** habilitada, navegador com JavaScript e acesso à internet no servidor.

### Opção 1 — PHP instalado

1. Extraia a pasta do projeto.
2. Abra um terminal dentro da pasta que contém `api.php` e `index.html`.
3. Execute:

```sh
php -S localhost:8000
```

4. Acesse **http://localhost:8000** no navegador.

Não abra `index.html` com duplo clique: o PHP precisa ser executado por um servidor. O servidor embutido serve para desenvolvimento e demonstração local.

### Opção 2 — XAMPP

1. Use uma instalação com PHP 8.1+.
2. Copie a pasta `tempo-na-cidade` para a pasta `htdocs` do XAMPP.
3. No painel do XAMPP, inicie **Apache**. MySQL não é necessário.
4. Acesse **http://localhost/tempo-na-cidade/**.
5. Se a extensão cURL estiver desabilitada, habilite `extension=curl` no `php.ini` usado pelo Apache e reinicie o Apache.

## Como funciona

```text
Usuário digita a cidade e clica em Consultar
        ↓
JavaScript envia GET para api.php?cidade=
        ↓
PHP valida a entrada e consulta a geocodificação da Open-Meteo
        ↓
PHP recebe JSON e extrai latitude e longitude
        ↓
PHP consulta a API de previsão com essas coordenadas
        ↓
PHP usa json_decode, seleciona os dados e retorna JSON próprio
        ↓
JavaScript atualiza os resultados sem recarregar a página
```

Toda requisição para a API pública ocorre no PHP, com cURL. O navegador só chama `api.php`. Os endereços externos são fixos, os parâmetros são codificados com `http_build_query` e os textos recebidos são apresentados com `textContent`.

## Arquivos

| Arquivo | Responsabilidade |
| --- | --- |
| `index.html` | Título, formulário, campo, botão e área de resultados |
| `style.css` | Aparência e adaptação para celular |
| `script.js` | Envio do formulário, carregamento, erros e atualização da tela |
| `api.php` | Validação, requisições HTTP, processamento de JSON e resposta |
| `README.md` | Execução, explicação e entrega |

## Tratamento de erros

- Campo vazio, espaços ou entrada curta: validação no navegador e no PHP.
- Parâmetro com tipo inválido ou mais de 160 bytes: HTTP 400.
- Cidade sem resultado: HTTP 404.
- Método diferente de GET: HTTP 405.
- API indisponível, resposta incompleta, JSON inválido ou falha de conexão: HTTP 502 com mensagem amigável.
- Limite de 12 segundos por consulta externa; limite de 30 segundos no navegador.
- O botão fica desabilitado durante a consulta e resultados antigos são ocultados.

Se aparecer erro de servidor, confira a internet, a extensão cURL e o terminal do PHP (ou log do Apache). Problemas de certificado devem ser corrigidos na configuração de certificados do PHP; mantenha a verificação HTTPS habilitada.

## Roteiro de verificação manual

1. Abra a página: formulário e mensagem inicial devem aparecer sem resultados fictícios.
2. Pesquise `Curitiba`: confira a localização, as três medidas atuais.
3. Pesquise `São Paulo`: os resultados anteriores devem ser substituídos.
4. Pesquise `zzzzzzzzzzzzzzzzzz`: deve aparecer a mensagem de cidade não encontrada.
5. Tente enviar vazio e somente espaços: a busca deve ser impedida.
6. Reduza a janela para largura de celular e navegue com Tab: campo e botão devem permanecer utilizáveis.
7. Desconecte a internet e faça uma nova busca: deve aparecer erro, e o botão deve voltar a funcionar. Reconecte e tente novamente.
8. Para ver o JSON processado pelo PHP, abra `/api.php?cidade=Curitiba` no mesmo servidor.

## Referências e créditos

- [Open-Meteo — documentação da previsão](https://open-meteo.com/en/docs)
- [Open-Meteo — geocodificação](https://open-meteo.com/en/docs/geocoding-api)
- [GeoNames — dados geográficos](https://www.geonames.org/)
- [CC BY 4.0 — atribuição dos dados](https://creativecommons.org/licenses/by/4.0/)
- [GitHub — criação de repositório](https://docs.github.com/en/repositories/creating-and-managing-repositories/creating-a-new-repository)
- [GitHub Pages — hospedagem de arquivos estáticos](https://docs.github.com/en/pages/getting-started-with-github-pages/creating-a-github-pages-site)
- [YouTube — envio de vídeos](https://support.google.com/youtube/answer/57407?hl=pt-BR)
- [YouTube — visibilidade](https://support.google.com/youtube/answer/157177?hl=pt-BR)
