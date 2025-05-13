<?php 
session_start();
if(!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true){
    $_SESSION['mensagem'] = "Usuário desconectado. Faça login novamente.";
    header("location: ../index.php");
    exit;
}
?>
