<?php
require_once '../conexao.php';

// 1. Busca os dados atuais do aluno com base no ID passado na URL
$id_tutor = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM tb_tutor WHERE id_tutor = ?");
$stmt->execute([$id_tutor]);
$tutor = $stmt->fetch(PDO::FETCH_ASSOC);

// 2. Processa a atualização quando o formulário for enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    
    // Query de UPDATE usando placeholders
    $sql = "UPDATE tb_tutor SET nome = ?, email = ? WHERE id_tutor = ?";
    $stmt = $pdo->prepare($sql);
    
    // Passa as variáveis + o $id no final
    if ($stmt->execute([$nome, $email, $id_tutor])) {
        header('Location: ../index.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Tutor</title>
    <link href="../style.css" rel="stylesheet">
</head>
<body>
    <div class="card p-4 mx-auto" style="max-width: 600px;">
        <h3 class="card-title mb-4">Editar Tutor: <?= htmlspecialchars($tb_tutor['nome']) ?></h3>

        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Nome Completo</label>
                <input type="text" name="nome" class="form-input" value="<?= htmlspecialchars($tb_tutor['nome']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-input" value="<?= htmlspecialchars($tb_tutor['email']) ?>" required>
            </div>
            <div style="display: flex; gap: 8px;">
                <button type="submit" class="btn btn-purple">Atualizar Dados</button>
                <a href="../index.php" class="btn btn-light">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>