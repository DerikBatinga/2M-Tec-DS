<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="gestao.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="gestao.js"></script>
    <title>EtecZL-Gestão</title>
</head>
<body>
    <!-- Cabeçalho com logo e navegação -->
    <header class="header">
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

    <!-- Seção dos principais representantes (diretora e coordenadores) -->
    <section>
        <div class="titulo_section">
            <h2>Principais representantes</h2>
        </div>

        <div class="container_diretora">
            <div class="container">
                <img src="../img/Amanda.jpg" alt="Diretora Amanda">
                <div class="container_titulotexto">
                    <h2>Diretora - Amanda</h2>
                    <p>
                        Diretora desde 2021, gerencia o financiamento da escola, eventos e refeições
                    </p>
                </div>
            </div>
        </div>

        <div class="container_coordenadores">
            <div class="container">
                <img src="../img/Jeferson.jpg" alt="Coordenador Jeferson">
                <div class="container_titulotexto">
                    <h2>Coordenador - Jeferson</h2>
                    <p>
                        Coordenador desde 2018 pelo período da tarde, Coordenador dos cursos AMS
                    </p>
                </div>
            </div>

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

    <!-- Seção da base de professores -->
    <section>
        <div class="opcoes_professores">
            <h2>Base dos professores</h2>
        </div>

        <div class="bases_professores">
            <button class="botao_aba ativo" onclick="mostrarAba('baseComum')">Base Comum</button>
            <button class="botao_aba" onclick="mostrarAba('ams')">AMS</button>
        </div>

        <div id="baseComum" class="cards_professores">
            <div class="card">
                <img src="../img/Ivonete.png" alt="Professora Ivonete">
                <h2>Ivonete dos Santos</h2>
                <p>Professora de Português pela Etec desde 2004</p>
            </div>

            <div class="card">
                <img src="../img/Elpidio.png" alt="Professor Elpidio">
                <h2>Elpidio Araujo</h2>
                <p>Professor de Matemática pela Etec desde 2009</p>
            </div>

            <div class="card">
                <img src="../img/Marlon.png" alt="Professor Marlon">
                <h2>Marlon Marques</h2>
                <p>Professor de História pela Etec desde 2015</p>
            </div>

            <div class="card">
                <img src="../img/Erick.png" alt="Professor Erick">
                <h2>Erick Aura</h2>
                <p>Professor de Química pela Etec desde 2014</p>
            </div>

            <div class="card">
                <img src="../img/Rafael.png" alt="Professor Rafael">
                <h2>Rafael Vitoria</h2>
                <p>Professor de Geografia pela Etec desde 2016</p>
            </div>

            <div class="card">
                <img src="../img/Cibelle.png" alt="Professora Cibelle">
                <h2>Cibelle Santos</h2>
                <p>Professora de Biologia pela Etec desde 2019</p>
            </div>
        </div>

        <div id="ams" class="cards_professores oculto">
            <div class="card">
                <img src="../img/Carlos.jpg" alt="Professor Carlos">
                <h2>Carlos Alberto</h2>
                <p>Professor de Banco de Dados e Desenvolvimento de Sistemas pela Etec desde 2003</p>
            </div>

            <div class="card">
                <img src="../img/Gilmar.jpg" alt="Professor Gilmar">
                <h2>Gilmar dos Santos</h2>
                <p>Professor de Programação Web pela Etec desde 2025</p>
            </div>

            <div class="card">
                <img src="../img/Salamao.jpg" alt="Professor Salamao">
                <h2>Salamao dos Santos</h2>
                <p>Professor de APS pela Etec desde 2024</p>
            </div>

            <div class="card">
                <img src="../img/Ralf.png" alt="Professor Ralf">
                <h2>Ralf Geronimo</h2>
                <p>Professor de Redes pela Etec desde 2017</p>
            </div>

            <div class="card">
                <img src="../img/Edna.png" alt="Professora Edna">
                <h2>Edna Moveis</h2>
                <p>Professora de Técnicas de Programação e Algoritmo pela Etec desde 2005</p>
            </div>

            <div class="card">
                <img src="../img/Gustavo.webp" alt="Professor Gustavo">
                <h2>Gustavo Caetano</h2>
                <p>Professor de Sistemas Embarcados desde 2008</p>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer>
        <div class="footer">
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

            <div class="footer_col">
                <h2>Receba novidades</h2>
                <label for="email_footer">Email</label>
                <input type="email" name="email" id="email_footer" placeholder="Seu e-mail aqui">
                <button type="submit"><i class="ri-mail-line"></i></button>
            </div>

            <div class="footer_direitos">
                <p>&copy;Etec da Zona Leste- Derik Batinga</p>
            </div>
        </div>
    </footer>
</body>
</html>
