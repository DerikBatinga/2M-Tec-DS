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
                        <a href="Cursos/cursos.php"> <i class="ri-graduation-cap-fill"></i>Cursos</a>
                    </li>
                    <li>               
                        <a href="#"> <i class="ri-team-fill"></i>Gestão</a>
                    </li>
                    <li>
                        <a href="Contato/contato.php"> <i class="ri-phone-fill"></i>    Contato</a>
                    </li>
                    <li>
                        <a class="btn" href="contato.php">Prestar prova</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

       <?php 
       $nome = $_POST["nome"];
       $email = $_POST["email"];
       $pessoa = $_POST["pessoa"];
       $assunto = $_POST["assunto"];
       $mensagem = $_POST["mensagem"];

       echo "<br>Nome:".$nome;
       echo "<br>E-mail:".$email;
       echo "<br>Pessoa:".$pessoa;
       echo "<br>Assunto:".$assunto;
       ?>


    <footer>
        <div class="footer">
            <div class="footer_col">
                <img src="img/EtecZL.png" alt="">
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
                <a href=""> <i class="ri-phone-fill"></i>Telefone</a>
            </li>
            </ul>
        </div>
        <div class="footer_col">
            <p>Links rápidos</p>
               <ul>
                    <li>               
                        <a href="#"> <i class="ri-home-2-fill"></i>Home</a>
                    </li>
                    <li>                
                        <a href="Cursos/cursos.php"> <i class="ri-graduation-cap-fill"></i>Cursos</a>
                    </li>
                    <li>               
                        <a href="Gestao/gestao.php"> <i class="ri-team-fill"></i>Gestão</a>
                    </li>
                    <li>
                        <a href="Contato/contato.php"> <i class="ri-phone-fill"></i>    Contato</a>
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