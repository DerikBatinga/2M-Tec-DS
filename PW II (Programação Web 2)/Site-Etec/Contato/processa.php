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
