<?php
  require '../partials/session_verify.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastrar Produto</title>
  <link rel="stylesheet" href="../css/crud.css">
</head>
<body>
  <div class="container">
    <h1>Cadastrar Produto</h1>
    <form action="../metodos/insert.php" method="POST">
      <label for="nome">Nome do Produto</label>
      <input type="text" id="nome" name="nome" required>

      <label for="preco">Preço (R$)</label>
      <input type="number" id="preco" name="preco" step="0.01" required>
      
      <label for="descricao">Descricao</label>
      <input type="text" id="descricao" name="descricao" required>
      
      <label for="categoria">Categoria</label>
      <input type="text" id="categoria" name="categoria" required>

      <button type="submit" class="btn">Salvar</button>
    </form>
    <a href="../principal.php" class="btn voltar-fixa">← Voltar</a>
  </div>
</body>
</html>
