<?php
require_once '../conexao.php';

// Verifica se o ID foi passado na URL
if (isset($_GET['id_user'])) {
    $id_user = $_GET['id_user'];
    
    // Prepara o DELETE
    $sql = "DELETE FROM tb_user WHERE id_user = ?";
    $stmt = $pdo->prepare($sql);
    
    // Executa passando o ID. Se houver sucesso, o registro é removido para sempre.
    $stmt->execute([$id_user]);
}

// Independentemente de sucesso ou erro, redireciona o usuário de volta para a lista
header('Location: ../index.php');
exit;
?>