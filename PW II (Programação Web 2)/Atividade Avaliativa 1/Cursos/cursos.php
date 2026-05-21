<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cursos.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>EtecZL-Cursos</title>
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

    <!-- Seção de cursos -->
    <section class="cursos_secao">
        <h1 class="cursos_titulo"><?php echo"Nossos Cursos" ?></h1>

        <div class="cursos_container">
            <div class="card">
                <img src="../img/AMS.webp" alt="Professor Elpidio">
                <h2><?php echo"AMS-Desenvolvimento de Sistemas" ?></h2>
                <p><?php echo"Professor de Matemática pela Etec desde 2009" ?></p>
            </div>

            <div class="card">
                <img src="../img/DS.webp" alt="Professor Marlon">
                <h2><?php echo"Desenvolvimento de Sistemas" ?></h2>
                <p><?php echo"Professor de História pela Etec desde 2015" ?></p>
            </div>

            <div class="card">
                <img src="../img/Marketing.webp" alt="Professora Ivonete">
                <h2><?php echo"Marketing" ?></h2>
                <p><?php echo"Professora de Português pela Etec desde 2004" ?></p>
            </div>

            <div class="card">
                <img src="../img/Logistica.webp" alt="Professor Erick">
                <h2><?php echo"Logística" ?></h2>
                <p><?php echo"Professor de Química pela Etec desde 2014" ?></p>
            </div>

            <div class="card">
                <img src="../img/Administração.webp" alt="Professor Rafael">
                <h2><?php echo"Administração" ?></h2>
                <p><?php echo"Professor de Geografia pela Etec desde 2016" ?></p>
            </div>

            <div class="card">
                <img src="../img/SJ.webp" alt="Professora Cibelle">
                <h2><?php echo"Sistemas Jurídicos" ?></h2>
                <p><?php echo"Professora de Biologia pela Etec desde 2019" ?></p>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer>
        <div class="footer">
            <div class="footer_col">
                <img src="../img/EtecZL.png" alt="Logo EtecZL">
                <p><?php echo"Etec da Zona Leste- Cada vez se superando!" ?></p>
                <ul>
                    <li>
                        <a href=""><i class="ri-instagram-fill"></i><?php echo"Instagram" ?></a>
                    </li>
                    <li>
                        <a href=""><i class="ri-youtube-fill"></i><?php echo"Youtube" ?></a>
                    </li>
                    <li>
                        <a href=""><i class="ri-facebook-box-fill"></i><?php echo"Facebook" ?></a>
                    </li>
                    <li>
                        <a href=""><i class="ri-phone-fill"></i><?php echo"Telefone" ?></a>
                    </li>
                </ul>
            </div>

            <div class="footer_col">
                <p><?php echo"Links rápidos" ?></p>
                <ul>
                    <li>
                        <a href="../index.php"> <i class="ri-home-2-fill"></i><?php echo"Home" ?></a>
                    </li>
                    <li>
                        <a href="../Cursos/cursos.php"> <i class="ri-graduation-cap-fill"></i><?php echo"Cursos" ?></a>
                    </li>
                    <li>
                        <a href="../Gestão/gestao.php"> <i class="ri-team-fill"></i><?php echo"Gestão" ?></a>
                    </li>
                    <li>
                        <a href="../Contato/contato.php"> <i class="ri-phone-fill"></i><?php echo"Contato" ?></a>
                    </li>
                </ul>
            </div>

            <div class="footer_col">
                <h2><?php echo"Receba novidades" ?></h2>
                <label for="email_footer"><?php echo"Email" ?></label>
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
