<?php
require '../classes/db.php';
require '../partials/session_verify.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "<div class='alert alert-danger'>ID inválido.</div>";
    exit;
}

$db = new DB();
$product = $db->getProductById($_GET['id']);
if (!$product) {
    echo "<div class='alert alert-warning'>Produto não encontrado.</div>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Editar Produto</title>
  <link rel="stylesheet" href="../css/crud.css">
</head>
<body>
  <div class="container">
    <h1>Editar Produto</h1>
    <form action="../metodos/edit.php" method="POST">
      <input type="hidden" name="id" value="<?= htmlspecialchars($product['id']) ?>">

      <label for="nome">Nome do Produto</label>
      <input type="text" id="nome" name="nome" value= "<?= htmlspecialchars($product['nome_produto']) ?>"  required>
     
      <label for="descricao">Descrição do Produto</label>
      <input type="text" id="descricao" name="descricao" value= "<?= htmlspecialchars($product['descricao']) ?>"  required>
      
      <label for="categoria">Categoria do Produto</label>
      <input type="text" id="categoria" name="categoria" value= "<?= htmlspecialchars($product['categoria']) ?>"  required>

      <label for="preco">Preço do Produto (R$)</label>
      <input type="number" id="preco" name="preco" value= "<?= htmlspecialchars($product['preco']) ?>" required>

      <button type="submit" class="btn">Atualizar</button>
    </form>
  </div>
</body>
</html>
