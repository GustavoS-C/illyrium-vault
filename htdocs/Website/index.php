<?php
include('Registration/functions.php');
if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: http://localhost/Website/Registration/login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Home Page</h2>
  </div>
  <div class="content">
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>
    <div class="profile_info">

      <div>
        <?php  if (isset($_SESSION['user'])) : ?>
          <strong><?php echo $_SESSION['user']['username']; ?></strong>
          <small>
            <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
            <br>
            Bem-vindo a Illyrium Vault, o primeiro e-commerce brasileiro de artigos para RPG de mesa online!<br><br>

<input type="button" class="button" value="Administração" onclick="location.href='Registration/home.php'"> 
<input type="button" class="button" value="Loja online" onclick="location.href='Shopping.php'"> 
<input type="button" class="button" value="Suporte" onclick="location.href='Support'"> 
<br>
            <a href="index.php?logout='1'" style="color: red;">Sair</a>
          </small>

        <?php endif ?>

        
      </div>
    </div>
  </div>
</body>
</html>
