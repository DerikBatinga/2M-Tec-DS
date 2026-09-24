<?php
require_once '../conexao.php';

// Verifica se o ID foi passado na URL
if (isset($_GET['id_tutor'])) {
    $id_tutor = $_GET['id_tutor'];
    
    // Prepara o DELETE
    $sql = "DELETE FROM tb_tutor WHERE id_tutor = ?";
    $stmt = $pdo->prepare($sql);
    
    // Executa passando o ID. Se houver sucesso, o registro é removido para sempre.
    $stmt->execute([$id_tutor]);
}

// Independentemente de sucesso ou erro, redireciona o usuário de volta para a lista
header('Location: ../index.php');
exit;
?>