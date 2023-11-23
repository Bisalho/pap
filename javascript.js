function ConfirmaApagar(id, nome) {
    escolha = confirm("Deseja eliminar o registo com o id " + id + " com o nome " + nome + "?");
    if (escolha == 1) {
        location = "eliminar_bdvendas.php?codigo=" + id;
    } else {
        location = "listagem_bdvendas.php";
    }
}