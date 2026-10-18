/**
 * gestao.js
 *
 * Script para gerenciar a troca de abas na página de gestão.
 */

/**
 * Função para mostrar/ocultar abas de professores.
 * Alterna entre a base comum e a aba AMS.
 *
 * @param {string} nomeDaAba - Nome da aba a ser exibida ('baseComum' ou 'ams')
 */
function mostrarAba(nomeDaAba) {
    // Obtém os containers das abas
    const containerBaseComum = document.getElementById('baseComum');
    const containerAms = document.getElementById('ams');
    // Obtém todos os botões de aba
    const botoes = document.querySelectorAll('.botao_aba');

    // Se a aba selecionada é 'baseComum'
    if (nomeDaAba === 'baseComum') {
        // Exibe o container da base comum e oculta o AMS
        containerBaseComum.classList.remove('oculto');
        containerAms.classList.add('oculto');
    }
    // Se a aba selecionada é 'ams'
    else if (nomeDaAba === 'ams') {
        // Exibe o container AMS e oculta a base comum
        containerAms.classList.remove('oculto');
        containerBaseComum.classList.add('oculto');
    }

    // Itera sobre todos os botões para atualizar o estado 'ativo'
    botoes.forEach(function(botao) {
        // Se o botão é 'Base Comum' e a aba ativa é 'baseComum'
        if (botao.textContent === 'Base Comum' && nomeDaAba === 'baseComum') {
            // Adiciona a classe 'ativo' ao botão
            botao.classList.add('ativo');
        }
        // Se o botão é 'AMS' e a aba ativa é 'ams'
        else if (botao.textContent === 'AMS' && nomeDaAba === 'ams') {
            // Adiciona a classe 'ativo' ao botão
            botao.classList.add('ativo');
        }
        // Para outros botões, remove a classe 'ativo'
        else {
            botao.classList.remove('ativo');
        }
    });
}
