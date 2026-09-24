<?php
require_once '../conexao.php';

// Verifica se o formulário foi enviado (método POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados dos campos de input
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Monta a query SQL com "placeholders" (?) para evitar SQL Injection
    $sql = "INSERT INTO tb_user (nome, email) VALUES (?, ?)";
    
    // Prepara a query no banco
    $stmt = $pdo->prepare($sql);
    
    // Executa substituindo os '?' pelas variáveis na ordem correta
    if ($stmt->execute([$nome, $email])) {
        // Se der certo, redireciona de volta para o index
        header('Location: ../index.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Novo User</title>
    <link href="../style.css" rel="stylesheet">
</head>
<body>
    <div class="card p-4 mx-auto" style="max-width: 600px;">
        <h3 class="card-title mb-4">Cadastrar Novo User</h3>

        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Nome Completo</label>
                <input type="text" name="nome" class="form-input" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-input" required>
            </div>
            <div style="display: flex; gap: 8px;">
                <button type="submit" class="btn btn-purple">Salvar Cadastro</button>
                <a href="../index.php" class="btn btn-light">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>