<?php
require_once 'conexao.php';      // Cria a variável $pdo
require_once 'READ/Rbanco.php';  // Usa o $pdo que foi criado acima
$tb_user = readUser($pdo);     // Funciona perfeitamente!
$tb_pet = readPet($pdo);
$tb_tutor = readTutor($pdo);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Gerenciamento de petshop</title>
</head>

<body>
    <div class="container">
        <img src="img/FuturusCare.png" alt="FuturusCare-Logo" width="500rem">
        <!-- Seção de listagem de Users -->
        <h4>Lista de Users</h4>
        <a href="CREATE/Cuser.php" class="btn btn-beige mb-3">Novo User</a>

        <table>
        <thead class="tabela-column">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <!-- Laço de repetição para exibir os dados recuperados do banco -->
                <?php foreach ($tb_user as $tb_user): ?>
                <tr>
                    <td><?= $tb_user['id_user'] ?></td>
                    <td><?= htmlspecialchars($tb_user['nome']) // htmlspecialchars previne ataques XSS ?></td>
                    <td><?= htmlspecialchars($tb_user['email']) ?></td>
                    <td class="tabela-action">
                        <!-- Link passando o ID do user via método GET na URL -->
                        <a href="UPDATE/Uuser.php?id=<?= $tb_user['id_user'] ?>" class="btn btn-light">Editar</a>

                        <!-- Botão de exclusão chamando a função JavaScript -->
                        <button onclick="confirmarExclusaoUser(<?= $tb_user['id_user'] ?>)" class="btn btn-light">Excluir</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Seção de listagem de Pets -->
        <h4>Lista de Pets</h4>
        <a href="CREATE/Cpet.php" class="btn btn-beige mb-3">Novo pet</a>

        <table>
        <thead class="tabela-column">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>User_id</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <!-- Laço de repetição para exibir os dados recuperados do banco -->
                <?php foreach ($tb_pet as $tb_pet): ?>
                <tr>
                    <td><?= $tb_pet['id_pet'] ?></td>
                    <td><?= htmlspecialchars($tb_pet['nome']) // htmlspecialchars previne ataques XSS ?></td>
                    <td><?= htmlspecialchars($tb_pet['user_id']) ?></td>
                    <td class="tabela-action">
                        <!-- Link passando o ID do pet via método GET na URL -->
                        <a href="UPDATE/Upet.php?id=<?= $tb_pet['id_pet'] ?>" class="btn btn-light">Editar</a>

                        <!-- Botão de exclusão chamando a função JavaScript -->
                        <button onclick="confirmarExclusaoPet(<?= $tb_pet['id_pet'] ?>)" class="btn btn-light">Excluir</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Seção de listagem de Tutores -->
        <h4>Lista de Tutores</h4>
        <a href="CREATE/Ctutor.php" class="btn btn-beige mb-3">Novo Tutor</a>

        <table>
        <thead class="tabela-column">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <!-- Laço de repetição para exibir os dados recuperados do banco -->
                <?php foreach ($tb_tutor as $tb_tutor): ?>
                <tr>
                    <td><?= $tb_tutor['id_tutor'] ?></td>
                    <td><?= htmlspecialchars($tb_tutor['nome']) // htmlspecialchars previne ataques XSS ?></td>
                    <td><?= htmlspecialchars($tb_tutor['email']) ?></td>
                    <td class="tabela-action">
                        <!-- Link passando o ID do tutor via método GET na URL -->
                        <a href="UPDATE/Ututor.php?id=<?= $tb_tutor['id_tutor'] ?>" class="btn btn-light">Editar</a>

                        <!-- Botão de exclusão chamando a função JavaScript -->
                        <button onclick="confirmarExclusaoTutor(<?= $tb_tutor['id_tutor'] ?>)" class="btn btn-light">Excluir</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Incluindo o arquivo JavaScript via tag src -->
    <script src="script.js"></script>
</body>
</html>