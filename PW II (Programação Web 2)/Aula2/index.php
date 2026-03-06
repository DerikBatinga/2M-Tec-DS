<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@100..800&display=swap');
        body{
            position: relative;
            
            background: 
            linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
            url(img/alonso.gif) no-repeat;
            background-size: 150rem;

            height: 100vh;           /* altura da tela */
            display: flex;           /* ativa flexbox */
            justify-content: center; /* centraliza horizontal */
            align-items: center;     /* centraliza vertical */
    
        }
        .texto{
            color: #c0c6ce;
            font-size: 30px;
            font-family: "playpen Sans";
            background:  #010011;
            border-radius: 5%;
            border: solid rgb(54, 154, 216) ;
        }
        .texto img{
            width: 30px;
        }
        .texto a{
            color: yellow;
            text-decoration: none;
        }
        .texto a:hover{
            color:orange;
        }
    </style>
</head>
<body>       
    <div class="texto">
    <?php
    $nome = "Derik";
    $sobrenome = "Batinga";
    $idade = 16;
    
    $data_nascimento = "11/08/2009";
    
    echo"<p>Meu nome é:$nome $sobrenome</p>";
    echo"<p>Tenho $idade anos</p>";
    echo "<p> Nasci em $data_nascimento";
    ?>
    <br></br>
    <img src="img/github.webp" alt="MeuGit"><a href="https://github.com/DerikBatinga">Meu GitHub</a>
</div>
</body>
</html>