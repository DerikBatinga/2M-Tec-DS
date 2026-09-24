<?php
// Inclui a configuração de conexão
require_once 'conexao.php';

// Funções de leitura para as tabelas do petshop

// Ler todos os users
function readUser($pdo) {
    $stmt = $pdo->query("SELECT * FROM tb_user");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Ler todos os pets
function readPet($pdo) {
    $stmt = $pdo->query("SELECT * FROM tb_pet");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Ler todos os tutores
function readTutor($pdo) {
    $stmt = $pdo->query("SELECT * FROM tb_tutor");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}