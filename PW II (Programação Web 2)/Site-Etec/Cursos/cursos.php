<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para o CSS específico da página de cursos -->
    <link rel="stylesheet" href="cursos.css">
    <!-- Ícones da biblioteca Remix Icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>EtecZL-Cursos</title>
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
                <!-- Lista de links de navegação -->
                <ul class="lista_nav">
                    <!-- Link para a página inicial -->
                    <li>
                        <a href="../index.php"> <i class="ri-home-2-fill"></i>Home</a>
                    </li>
                    <!-- Link para a página de cursos (página atual) -->
                    <li>
                        <a href="../Cursos/cursos.php"> <i class="ri-graduation-cap-fill"></i>Cursos</a>
                    </li>
                    <!-- Link para a página de gestão -->
                    <li>
                        <a href="../Gestão/gestao.php"> <i class="ri-team-fill"></i>Gestão</a>
                    </li>
                    <!-- Link para a página de contato -->
                    <li>
                        <a href="../Contato/contato.php"> <i class="ri-phone-fill"></i>Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- ==========================================
         SEÇÃO DE CURSOS
         Apresenta os cursos oferecidos pela Etec
         ========================================== -->
    <section class="cursos_secao">
        <!-- Título da seção de cursos -->
        <h1 class="cursos_titulo">Nossos Cursos</h1>

        <!-- Container que organiza os cards em grid -->
        <div class="cursos_container">
            <!-- Card do curso de AMS -->
            <div class="card">
                <!-- Imagem do professor/coordenador do curso -->
                <img src="../img/Elpidio.png" alt="Professor Elpidio">
                <!-- Nome do curso -->
                <h2>AMS-Desenvolvimento de Sistemas</h2>
                <!-- Descrição do professor -->
                <p>Professor de Matemática pela Etec desde 2009</p>
            </div>

            <!-- Card do curso de Desenvolvimento de Sistemas -->
            <div class="card">
                <img src="../img/Marlon.png" alt="Professor Marlon">
                <h2>Desenvolvimento de Sistemas</h2>
                <p>Professor de História pela Etec desde 2015</p>
            </div>

            <!-- Card do curso de Marketing -->
            <div class="card">
                <img src="../img/Ivonete.png" alt="Professora Ivonete">
                <h2>Marketing</h2>
                <p>Professora de Português pela Etec desde 2004</p>
            </div>

            <!-- Card do curso de Logística -->
            <div class="card">
                <img src="../img/Erick.png" alt="Professor Erick">
                <h2>Logística</h2>
                <p>Professor de Química pela Etec desde 2014</p>
            </div>

            <!-- Card do curso de Administração -->
            <div class="card">
                <img src="../img/Rafael.png" alt="Professor Rafael">
                <h2>Administração</h2>
                <p>Professor de Geografia pela Etec desde 2016</p>
            </div>

            <!-- Card do curso de Sistemas Jurídicos -->
            <div class="card">
                <img src="../img/Cibelle.png" alt="Professora Cibelle">
                <h2>Sistemas Jurídicos</h2>
                <p>Professora de Biologia pela Etec desde 2019</p>
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
                <!-- Links das redes sociais -->
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
