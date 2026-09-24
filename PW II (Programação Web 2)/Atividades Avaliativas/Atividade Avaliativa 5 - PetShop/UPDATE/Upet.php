<?php
require_once '../conexao.php';

// 1. Busca os dados atuais do aluno com base no ID passado na URL
$id_pet = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM tb_pet WHERE id_pet = ?");
$stmt->execute([$id_pet]);
$pet = $stmt->fetch(PDO::FETCH_ASSOC);

// 2. Processa a atualização quando o formulário for enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $user_id = $_POST['user_id'];
    
    // Query de UPDATE usando placeholders
    $sql = "UPDATE tb_pet SET nome = ?, user_id = ? WHERE id_pet = ?";
    $stmt = $pdo->prepare($sql);
    
    // Passa as variáveis + o $id no final
    if ($stmt->execute([$nome, $user_id, $id_pet])) {
        header('Location: ../index.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Pet</title>
    <link href="../style.css" rel="stylesheet">
</head>
<body>
    <div class="card p-4 mx-auto" style="max-width: 600px;">
        <h3 class="card-title mb-4">Editar Pet: <?= htmlspecialchars($tb_pet['nome']) ?></h3>

        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Nome do Pet</label>
                <input type="text" name="nome" class="form-input" value="<?= htmlspecialchars($tb_pet['nome']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">ID do User</label>
                <input type="number" name="user_id" class="form-input form-input-small" value="<?= htmlspecialchars($tb_pet['user_id']) ?>" required>
            </div>
            <div style="display: flex; gap: 8px;">
                <button type="submit" class="btn btn-purple">Atualizar Dados</button>
                <a href="../index.php" class="btn btn-light">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>