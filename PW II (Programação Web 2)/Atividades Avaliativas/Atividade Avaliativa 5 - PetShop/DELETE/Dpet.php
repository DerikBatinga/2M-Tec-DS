<?php
require_once '../conexao.php';

// Verifica se o ID foi passado na URL
if (isset($_GET['id_pet'])) {
    $id_pet = $_GET['id_pet'];
    
    // Prepara o DELETE
    $sql = "DELETE FROM tb_pet WHERE id_pet = ?";
    $stmt = $pdo->prepare($sql);
    
    // Executa passando o ID. Se houver sucesso, o registro é removido para sempre.
    $stmt->execute([$id_pet]);
}

// Independentemente de sucesso ou erro, redireciona o usuário de volta para a lista
header('Location: ../index.php');
exit;
?>