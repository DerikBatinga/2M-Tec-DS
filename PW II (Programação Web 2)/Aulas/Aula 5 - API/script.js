//Async juntamente de await serve para aguardar respostas de API
async function consultarClima() {
    try{
        //Requisita em HTTP para a API,o await serve para esperar a resposta da API
        const resposta = await fetch(
              `https://api.openweathermap.org/data/2.5/weather?q=${cidade}&appid=50c45a35ade545852fde43469b40e2da&units=metric&lang=pt_br`
        );
    }
}