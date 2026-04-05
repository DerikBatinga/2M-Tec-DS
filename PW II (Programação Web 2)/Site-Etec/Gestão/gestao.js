  // Função para mostrar a aba selecionada e ocultar a outra
        function mostrarAba(nomeDaAba) {
            // Captura o elemento da aba Base Comum pelo seu ID
            const containerBaseComum = document.getElementById('baseComum');

            // Captura o elemento da aba AMS pelo seu ID
            const containerAms = document.getElementById('ams');

            // Captura todos os botões de aba
            const botoes = document.querySelectorAll('.botao_aba');

            // Se a aba selecionada for Base Comum
            if (nomeDaAba === 'baseComum') {
                // Remove a classe 'oculto' do container Base Comum para mostrá-lo
                containerBaseComum.classList.remove('oculto');

                // Adiciona a classe 'oculto' no container AMS para ocultá-lo
                containerAms.classList.add('oculto');
            }
            // Se a aba selecionada for AMS
            else if (nomeDaAba === 'ams') {
                // Remove a classe 'oculto' do container AMS para mostrá-lo
                containerAms.classList.remove('oculto');

                // Adiciona a classe 'oculto' no container Base Comum para ocultá-lo
                containerBaseComum.classList.add('oculto');
            }

            // Percorre todos os botões para atualizar o estilo da aba ativa
            botoes.forEach(function(botao) {
                // Se o texto do botão for igual ao nome da aba selecionada
                if (botao.textContent === 'Base Comum' && nomeDaAba === 'baseComum') {
                    // Adiciona a classe 'ativo' neste botão
                    botao.classList.add('ativo');
                }
                // Se o texto do botão for igual ao nome da aba selecionada
                else if (botao.textContent === 'AMS' && nomeDaAba === 'ams') {
                    // Adiciona a classe 'ativo' neste botão
                    botao.classList.add('ativo');
                }
                // Para os outros botões
                else {
                    // Remove a classe 'ativo' para mostrar que não estão selecionados
                    botao.classList.remove('ativo');
                }
            });
        }