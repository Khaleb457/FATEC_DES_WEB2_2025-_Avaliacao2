<?php
require '../classes/db.php';
require '../partials/session_verify.php';

$db = new DB();
$product = $db->getAllProducts();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Produtos Cadastrados</title>
  <link rel="stylesheet" href="../css/crud.css">
</head>
<body>
  <div class="container container-wide">
    <h1>Produtos Cadastrados</h1>
    
    <?php if (!empty($mensagem)): ?>
       <div class="<?php echo $classe; ?>">
        <?php echo $mensagem; ?>
      </div>
    <?php endif; ?>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Categoria</th>
          <th>Preço</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($product as $products): ?>
            <tr>
                <td><?= htmlspecialchars($products['id']) ?></td>
                <td><?= htmlspecialchars($products['nome_produto']) ?></td>
                <td><?= htmlspecialchars($products['descricao']) ?></td>
                <td><?= htmlspecialchars($products['categoria']) ?></td>
                <td><?= htmlspecialchars($products['preco']) ?></td>
                <td>
                    <a href="edit.php?id=<?= $products['id'] ?>" class="btn btn-sm btn-primary">Editar</a>
                    <a href="../metodos/delete.php?id=<?= $products['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <a href="../principal.php" class="btn voltar-fixa">← Voltar</a>
  </div>
</body>
</html>
