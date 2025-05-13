<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Login - Loja Artesanal</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="login-container">
    <h2>Bem-vindo à Loja Artesanal</h2>
    <form action="login.php" method="POST">
      <label for="usuario">Usuário</label>
      <input type="text" id="login" name="login" required>

      <label for="senha">Senha</label>
      <input type="password" id="senha" name="senha" required>

      <button type="submit">Entrar</button> <br>
    </form>
    <?php
session_start();

if (isset($_SESSION['mensagem'])) {
    echo "<div style='background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 15px; border: 1px solid #c3e6cb;'>
            {$_SESSION['mensagem']}
          </div>";
    unset($_SESSION['mensagem']); 
}
?>
  </div>
</body>
</html>
