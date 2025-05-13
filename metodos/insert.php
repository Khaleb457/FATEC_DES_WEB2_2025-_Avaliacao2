<?php
require '../classes/db.php';
$db = new DB();
if (
    !isset($_POST['nome'], $_POST['preco'], $_POST['descricao'], $_POST['categoria']) ||
    empty(trim($_POST['nome'])) ||
    empty(trim($_POST['preco'])) ||
    empty(trim($_POST['descricao']))||
    empty(trim($_POST['categoria']))
) {
    echo "Todos os campos são obrigatórios.";
    exit;
}
$db->insertProduct($_POST['nome'], $_POST['preco'], $_POST['descricao'], $_POST['categoria']);
header("Location: ../principal.php?mensagem=cadastro");
exit;
