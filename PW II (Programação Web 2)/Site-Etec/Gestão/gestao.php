<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para o CSS específico da página de gestão -->
    <link rel="stylesheet" href="gestao.css">
    <!-- Ícones da biblioteca Remix Icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Script para controle das abas de professores -->
    <script src="gestao.js"></script>
    <title>EtecZL-Gestão</title>
</head>
<body>
    <!-- ==========================================
         CABEÇALHO / HEADER
         Barra de navegação fixa no topo
         ========================================== -->
    <header class="header">
        <!-- Logo da Etec na navegação -->
        <img class="logo_nav" src="../img/EtecZL.png" alt="Logo EtecZL">
        <nav>
            <div class="container_nav">
                <ul class="lista_nav">
                    <li>
                        <a href="../index.php"> <i class="ri-home-2-fill"></i>Home</a>
                    </li>
                    <li>
                        <a href="../Cursos/cursos.php"> <i class="ri-graduation-cap-fill"></i>Cursos</a>
                    </li>
                    <li>
                        <a href="../Gestão/gestao.php"> <i class="ri-team-fill"></i>Gestão</a>
                    </li>
                    <li>
                        <a href="../Contato/contato.php"> <i class="ri-phone-fill"></i>Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- ==========================================
         SEÇÃO: DIRETORA E COORDENADORES
         Apresenta a equipe diretiva da Etec
         ========================================== -->
    <section>
        <!-- Título da seção de representantes -->
        <div class="titulo_section">
            <h2>Principais representantes</h2>
        </div>

        <!-- Container da Diretora -->
        <div class="container_diretora">
            <div class="container">
                <!-- Foto da Diretora Amanda -->
                <img src="../img/Amanda.jpg" alt="Diretora Amanda">
                <div class="container_titulotexto">
                    <h2>Diretora - Amanda</h2>
                    <p>
                        Diretora desde 2021, gerencia o financiamento da escola, eventos e refeições
                    </p>
                </div>
            </div>
        </div>

        <!-- Container dos Coordenadores (em linha) -->
        <div class="container_coordenadores">
            <!-- Coordenador Jeferson -->
            <div class="container">
                <img src="../img/Jeferson.jpg" alt="Coordenador Jeferson">
                <div class="container_titulotexto">
                    <h2>Coordenador - Jeferson</h2>
                    <p>
                        Coordenador desde 2018 pelo período da tarde, Coordenador dos cursos AMS
                    </p>
                </div>
            </div>

            <!-- Vice-Coordenador Rogerio -->
            <div class="container">
                <img src="../img/Rogerio.jpg" alt="Vice-Coordenador Rogerio">
                <div class="container_titulotexto">
                    <h2>Vice-Coordenador - Rogerio</h2>
                    <p>
                        Vice-coordenador desde 2018 pelo período da tarde, Coordenador dos cursos AMS
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         SEÇÃO: BASE DE PROFESSORES
         Lista de professores com abas por área
         ========================================== -->
    <section>
        <!-- Título da seção de base de professores -->
        <div class="opcoes_professores">
            <h2>Base dos professores</h2>
        </div>

        <!-- Botões das abas clicáveis para filtrar professores -->
        <div class="bases_professores">
            <!-- Botão para mostrar professores da Base Comum -->
            <button class="botao_aba ativo" onclick="mostrarAba('baseComum')">Base Comum</button>
            <!-- Botão para mostrar professores da AMS -->
            <button class="botao_aba" onclick="mostrarAba('ams')">AMS</button>
        </div>

        <!-- Container da Base Comum (professores gerais) -->
        <div id="baseComum" class="cards_professores">
            <!-- Professora Ivonete - Português -->
            <div class="card">
                <img src="../img/Ivonete.png" alt="Professora Ivonete">
                <h2>Ivonete dos Santos</h2>
                <p>Professora de Português pela Etec desde 2004</p>
            </div>

            <!-- Professor Elpidio - Matemática -->
            <div class="card">
                <img src="../img/Elpidio.png" alt="Professor Elpidio">
                <h2>Elpidio Araujo</h2>
                <p>Professor de Matemática pela Etec desde 2009</p>
            </div>

            <!-- Professor Marlon - História -->
            <div class="card">
                <img src="../img/Marlon.png" alt="Professor Marlon">
                <h2>Marlon Marques</h2>
                <p>Professor de História pela Etec desde 2015</p>
            </div>

            <!-- Professor Erick - Química -->
            <div class="card">
                <img src="../img/Erick.png" alt="Professor Erick">
                <h2>Erick Aura</h2>
                <p>Professor de Química pela Etec desde 2014</p>
            </div>

            <!-- Professor Rafael - Geografia -->
            <div class="card">
                <img src="../img/Rafael.png" alt="Professor Rafael">
                <h2>Rafael Vitoria</h2>
                <p>Professor de Geografia pela Etec desde 2016</p>
            </div>

            <!-- Professora Cibelle - Biologia -->
            <div class="card">
                <img src="../img/Cibelle.png" alt="Professora Cibelle">
                <h2>Cibelle Santos</h2>
                <p>Professora de Biologia pela Etec desde 2019</p>
            </div>
        </div>

        <!-- Container da AMS (professores técnicos) - Inicialmente oculto -->
        <div id="ams" class="cards_professores oculto">
            <!-- Professor Carlos - Banco de Dados e Dev Systems -->
            <div class="card">
                <img src="../img/Carlos.jpg" alt="Professor Carlos">
                <h2>Carlos Alberto</h2>
                <p>Professor de Banco de Dados e Desenvolvimento de Sistemas pela Etec desde 2003</p>
            </div>

            <!-- Professor Gilmar - Programação Web -->
            <div class="card">
                <img src="../img/Gilmar.jpg" alt="Professor Gilmar">
                <h2>Gilmar dos Santos</h2>
                <p>Professor de Programação Web pela Etec desde 2025</p>
            </div>

            <!-- Professor Salamao - APS -->
            <div class="card">
                <img src="../img/Salamao.jpg" alt="Professor Salamao">
                <h2>Salamao dos Santos</h2>
                <p>Professor de APS pela Etec desde 2024</p>
            </div>

            <!-- Professor Ralf - Redes -->
            <div class="card">
                <img src="../img/Ralf.png" alt="Professor Ralf">
                <h2>Ralf Geronimo</h2>
                <p>Professor de Redes pela Etec desde 2017</p>
            </div>

            <!-- Professora Edna - Técnicas de Programação -->
            <div class="card">
                <img src="../img/Edna.png" alt="Professora Edna">
                <h2>Edna Moveis</h2>
                <p>Professora de Técnicas de Programação e Algoritmo pela Etec desde 2005</p>
            </div>

            <!-- Professor Gustavo - Sistemas Embarcados -->
            <div class="card">
                <img src="../img/Gustavo.webp" alt="Professor Gustavo">
                <h2>Gustavo Caetano</h2>
                <p>Professor de Sistemas Embarcados desde 2008</p>
            </div>
        </div>
    </section>

    <!-- ==========================================
         RODAPÉ / FOOTER
         Informações de contato e links rápidos
         ========================================== -->
    <footer>
        <div class="footer">
            <!-- Coluna com logo e informações da Etec -->
            <div class="footer_col">
                <img src="../img/EtecZL.png" alt="Logo EtecZL">
                <p>Etec da Zona Leste- Cada vez se superando!</p>
                <ul>
                    <li>
                        <a href=""><i class="ri-instagram-fill"></i>Instagram</a>
                    </li>
                    <li>
                        <a href=""><i class="ri-youtube-fill"></i>Youtube</a>
                    </li>
                    <li>
                        <a href=""><i class="ri-facebook-box-fill"></i>Facebook</a>
                    </li>
                    <li>
                        <a href=""><i class="ri-phone-fill"></i>Telefone</a>
                    </li>
                </ul>
            </div>

            <!-- Coluna com links de navegação rápida -->
            <div class="footer_col">
                <p>Links rápidos</p>
                <ul>
                    <li>
                        <a href="../index.php"> <i class="ri-home-2-fill"></i>Home</a>
                    </li>
                    <li>
                        <a href="../Cursos/cursos.php"> <i class="ri-graduation-cap-fill"></i>Cursos</a>
                    </li>
                    <li>
                        <a href="../Gestão/gestao.php"> <i class="ri-team-fill"></i>Gestão</a>
                    </li>
                    <li>
                        <a href="../Contato/contato.php"> <i class="ri-phone-fill"></i>Contato</a>
                    </li>
                </ul>
            </div>

            <!-- Coluna para receber novidades por email -->
            <div class="footer_col">
                <h2>Receba novidades</h2>
                <label for="email_footer">Email</label>
                <input type="email" name="email" id="email_footer" placeholder="Seu e-mail aqui">
                <button type="submit"><i class="ri-mail-line"></i></button>
            </div>

            <!-- Barra de direitos autorais -->
            <div class="footer_direitos">
                <p>&copy;Etec da Zona Leste- Derik Batinga</p>
            </div>
        </div>
    </footer>
</body>
</html>
