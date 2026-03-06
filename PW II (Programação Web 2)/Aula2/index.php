<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Changa+One:ital@0;1&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        body{
            position: relative;
            background-image: url(img/alonso.gif);
        }
        .texto{
            font-size: 20px;
            font-family: 'Montserrat';
            align-items: center;
            justify-content: center;
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
</div>
</body>
</html>