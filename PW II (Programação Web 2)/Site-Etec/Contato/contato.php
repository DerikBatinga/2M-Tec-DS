<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contato.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>EtecZL-Início</title>
</head>
<body>
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
                        <a href="../Contato/contato.php"> <i class="ri-phone-fill"></i>    Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section>
        <div class="form">
            <div class="imagemlateral">
                <h2>Entre em contato</h2>
                <p>Sinta-se livre para tirar dúvidas na secretaria!</p>
                <span>(11) 99999-9999</span>
            </div>
            <form action="processa.php" method="post">
                <div class="form_container">
                    <div class="form_titulo">
                        <h2>Contate</h2>
                        <p>Tire suas dúvidas</p>
                    </div>
                        <div class="campo">
                            <label for="nome">Nome Completo:</label>
                        <input id="nome" name="nome" type="text" placeholder="Nome">
                    </div>

                    <div class="campo">
                        <label for="email">E-mail para Contato</label>
                        <input id="email" name="email" type="email" placeholder="Email">
                    </div>

                    <div class="campo">
                        <label for="pessoa">Quem está fazendo este formulário:</label>
                        <select id="pessoa" name="pessoa" >
                            <option value="Est">Estudante</option>
                            <option value="Resp">Responsável</option>
                        </select>
                    </div>

                    <div class="campo">
                        <label for="assunto">Assunto:</label>
                        <input id="assunto" name="assunto" type="text" placeholder="Informe do que se trata">
                    </div>

                    <div class="campo">
                        <label for="mensagem">Mensagem:</label>
                        <textarea id="mensagem" name="mensagem" placeholder="Mensagem"></textarea>
                    </div>
                     <div class="botao_enviar">
                    <input class="botao_enviar" type="submit" value="Enviar">
                </div>
                </div>
            </form>
            </div>
    </section>
    <footer>
        <div class="footer">
            <div class="footer_col">
                <img src="../img/EtecZL.png" alt="">
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
                        <a href="../Contato/contato.php"> <i class="ri-phone-fill"></i>    Contato</a>
                    </li>
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
