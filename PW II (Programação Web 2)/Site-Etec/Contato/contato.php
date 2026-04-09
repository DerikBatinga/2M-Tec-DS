<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contato.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>EtecZL-Contato</title>
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

    <!-- Seção do formulário de contato -->
    <section>
        <div class="form">
            <!-- Imagem lateral com informações de contato -->
            <div class="imagemlateral">
                <h2><?php echo"Entre em contato" ?></h2>
                <p><?php echo"Sinta-se livre para tirar dúvidas na secretaria!" ?></p>
                <span><?php echo"(11) 99999-9999" ?></span>
            </div>

            <!-- Formulário -->
            <form action="processa.php" method="post">
                <div class="form_container">
                    <div class="form_titulo">
                        <h2><?php echo"Contate" ?></h2>
                        <p><?php echo"Tire suas dúvidas" ?></p>
                    </div>
                    <div class="campo">
                        <label for="nome"><?php echo"Nome Completo:" ?></label>
                        <input id="nome" name="nome" type="text" placeholder="Nome">
                    </div>

                    <div class="campo">
                        <label for="email"><?php echo"E-mail para Contato" ?></label>
                        <input id="email" name="email" type="email" placeholder="Email">
                    </div>

                    <div class="campo">
                        <label for="pessoa"><?php echo"Quem está fazendo este formulário:" ?></label>
                        <select id="pessoa" name="pessoa">
                            <option value="Est"><?php echo"Estudante" ?></option>
                            <option value="Resp"><?php echo"Responsável" ?></option>
                        </select>
                    </div>

                    <div class="campo">
                        <label for="assunto"><?php echo"Assunto:" ?></label>
                        <input id="assunto" name="assunto" type="text" placeholder="Informe do que se trata">
                    </div>

                    <div class="campo">
                        <label for="mensagem"><?php echo"Mensagem:" ?></label>
                        <textarea id="mensagem" name="mensagem" placeholder="Mensagem"></textarea>
                    </div>
                    <div class="botao_enviar">
                        <input class="botao_enviar" type="submit" value="Enviar">
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Rodapé -->
    <footer>
        <div class="footer">
            <div class="footer_col">
                <img src="../img/EtecZL.png" alt="">
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
