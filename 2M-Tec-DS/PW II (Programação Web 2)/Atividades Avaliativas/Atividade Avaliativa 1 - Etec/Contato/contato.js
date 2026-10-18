       document.addEventListener("DOMContentLoaded", () => {
    // Captura dos elementos do formulário usando os IDs corretos do HTML
    const caixaFormulario = document.getElementById("form_contato");
    const campoNome = document.getElementById("nome");
    const campoEmail = document.getElementById("email");
    const campoAssunto = document.getElementById("assunto");
    const campoMensagem = document.getElementById("mensagem");

    caixaFormulario.addEventListener("submit", (evento) => {
        let estadoValidacao = true;
        let mensagensErro = [];

        // Agrupamento dos dados limpos (sem espaços em branco nas pontas)
        const informacoesSubmetidas = {
            nomeUtilizador: campoNome.value.trim(),
            emailUtilizador: campoEmail.value.trim(),
            assuntoContacto: campoAssunto.value.trim(),
            textoMensagem: campoMensagem.value.trim()
        };

        // Validação do Nome
        if (!informacoesSubmetidas.nomeUtilizador) {
            mensagensErro.push("Por favor, introduza o seu nome completo.");
            estadoValidacao = false;
        }

        // Validação do E-mail
        const formatoEmailValido = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!informacoesSubmetidas.emailUtilizador) {
            mensagensErro.push("O endereço de e-mail é obrigatório.");
            estadoValidacao = false;
        } else if (!formatoEmailValido.test(informacoesSubmetidas.emailUtilizador)) {
            mensagensErro.push("O e-mail introduzido não tem um formato válido.");
            estadoValidacao = false;
        }

        // Validação do Assunto
        if (!informacoesSubmetidas.assuntoContacto) {
            mensagensErro.push("Especifique o assunto da sua mensagem.");
            estadoValidacao = false;
        }
        
        // Validação da Mensagem
        if (!informacoesSubmetidas.textoMensagem) {
            mensagensErro.push("Não se esqueça de escrever o conteúdo da mensagem.");
            estadoValidacao = false;
        }

        // Saída de dados no console
        console.log("=== Auditoria de Formulário EtecZL ===");
        console.log("Dados capturados para envio:", informacoesSubmetidas);

        // Controlo final do envio
        if (!estadoValidacao) {
            evento.preventDefault(); // Trava o envio para o PHP (processa.php) se houver erros
            
            console.warn("Resultado: Envio cancelado devido a erros nos campos.");
            alert("Erro ao enviar! Corrija os seguintes campos:\n\n" + mensagensErro.join("\n"));
        } else {
            console.log("Resultado: Tudo correto! Dados enviados para o servidor.");
            alert("Sucesso! Os seus dados foram validados e a mensagem está a ser enviada.");
        }
    });
});