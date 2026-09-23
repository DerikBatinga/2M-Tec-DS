<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contato.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>EtecZL-Processa</title>
</head>
<?php
/**
 * processa.php
 *
 * Processa os dados do formulário de contato e exibe as informações submetidas.
 */

// Recebe os dados do formulário via POST
$nome = $_POST["nome"];
$email = $_POST["email"];
$pessoa = $_POST["pessoa"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];

// Exibe os dados recebidos
echo "<br><p>Nome:</p>".$nome;
echo "<br><p>E-mail:</p>".$email;
echo "<br><p>Pessoa:</p>".$pessoa;
echo "<br><p>Assunto</p>:".$assunto;

// Inclui o card de resultado
?>
<div class="card">
    <?php
    echo "<br><p>Nome:</p>".$nome;
    echo "<br><p>E-mail:</p>".$email;
    echo "<br><p>Pessoa:</p>".$pessoa;
    echo "<br><p>Assunto</p>:".$assunto;
    ?>
</div>
