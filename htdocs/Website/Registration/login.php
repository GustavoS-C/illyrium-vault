<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login e Registro</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Login</h2>
  </div>
  <form method="post" action="login.php">

    <?php echo display_error(); ?>

    <div class="input-group">
      <label>Usuário</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Senha</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_btn">Acessar</button>
    </div>
    <p>
      Ainda não é um membro? <a href="register.php">Registre-se!</a>
    </p>
  </form>
</body>
</html>