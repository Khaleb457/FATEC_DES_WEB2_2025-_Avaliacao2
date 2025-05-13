<?php
require '../classes/db.php';
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "ID inválido para exclusão.";
    exit;
}
$db = new DB();
$db->deleteProduct($_GET['id']);
header("Location: ../principal.php?mensagem=exclusao");
exit;
