<?php
require '../classes/db.php';
if (
    !isset($_POST['id'], $_POST['nome'], $_POST['preco'], $_POST['descricao'], $_POST['categoria']) ||
    !is_numeric($_POST['id']) ||
    empty(trim($_POST['nome'])) ||
    empty(trim($_POST['preco'])) ||
    empty(trim($_POST['descricao'])) ||
    empty(trim($_POST['categoria'])) 
) {
    echo "Dados inválidos.";
    exit;
}
$db = new DB();
$db->updateProduct($_POST['id'], $_POST['nome'], $_POST['preco'], $_POST['descricao'], $_POST['categoria']);
header("Location: ../principal.php?mensagem=edicao");
exit;
