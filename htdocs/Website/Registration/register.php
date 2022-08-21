<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registro do PHP e MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Register</h2>
  </div>
  
  <form method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Usuário</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Senha</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirmar Senha</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="register_btn">Registrar</button>
    </div>
    <p>
      Já é um membro? <a href="login.php">Registre-se!</a>
    </p>
  </form>
</body>
</html>