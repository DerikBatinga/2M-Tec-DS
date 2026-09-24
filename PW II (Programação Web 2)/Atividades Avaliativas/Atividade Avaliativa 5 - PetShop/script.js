/**
 * Função JavaScript para confirmar a exclusão de um usuário.
 * Redireciona para a página de exclusão passando o ID do usuário.
 *
 * @param {number} id_user - ID do usuário a ser excluído
 */
function confirmarExclusaoUser(id_user) {
    if (confirm("Tem certeza que deseja excluir este usuário? Esta ação não pode ser desfeita.")) {
        // Redireciona para a página de exclusão passando o ID do usuário
        window.location.href = "DELETE/Duser.php?id_user=" + id_user;
    }
}

/**
 * Função JavaScript para confirmar a exclusão de um pet.
 * Redireciona para a página de exclusão passando o ID do pet.
 *
 * @param {number} id_pet - ID do pet a ser excluído
 */
function confirmarExclusaoPet(id_pet) {
    if (confirm("Tem certeza que deseja excluir este pet? Esta ação não pode ser desfeita.")) {
        // Redireciona para a página de exclusão passando o ID do pet
        window.location.href = "DELETE/Dpet.php?id_pet=" + id_pet;
    }
}

/**
 * Função JavaScript para confirmar a exclusão de um tutor.
 * Redireciona para a página de exclusão passando o ID do tutor.
 *
 * @param {number} id_tutor - ID do tutor a ser excluído
 */
function confirmarExclusaoTutor(id_tutor) {
    if (confirm("Tem certeza que deseja excluir este tutor? Esta ação não pode ser desfeita.")) {
        // Redireciona para a página de exclusão passando o ID do tutor
        window.location.href = "DELETE/Dtutor.php?id_tutor=" + id_tutor;
    }
}
//-Opencode
