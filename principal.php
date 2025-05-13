<?php
$mensagem = '';
$classe = '';

if (isset($_GET['mensagem'])) {
    switch ($_GET['mensagem']) {
        case 'cadastro':
            $mensagem = '✅ Produto cadastrado com sucesso!';
            $classe = 'alerta alerta-sucesso';
            break;
        case 'edicao':
            $mensagem = '✏️ Produto editado com sucesso!';
            $classe = 'alerta alerta-edicao';
            break;
        case 'exclusao':
            $mensagem = '❌ Produto removido com sucesso!';
            $classe = 'alerta alerta-exclusao';
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Página Inicial - Loja Artesanal</title>
  <link rel="stylesheet" href="css/principal.css">
</head>
<body>
  <div class="container">
    <h1>Loja de Produtos Artesanais</h1>
    <div class="button-group">
      <a href="CRUD/new.php" class="btn">Cadastrar Produto</a>
      <a href="CRUD/index.php" class="btn">Visualizar Produtos</a>
      
      <a href="login.php" class="btn logout">Logout</a>
    </div>
    
    <?php if (!empty($mensagem)): ?>
      <div class="<?php echo $classe; ?>">
        <?php echo $mensagem; ?>
     </div>
    <?php endif; ?>

  </div>
</body>
</html>
