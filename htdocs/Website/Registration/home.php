<?php
require('../db.php');
include("functions.php");

if (!isAdmin()) {
	$_SESSION['msg'] = "Você deve se cadastrar primeiro";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	.header {
		background: #003366;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
</head>
<body>
	<div class="header">
		<h2>Commanding Station</h2>
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
			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						Good day, sire! <br>
						<input type="button" class="button" value="Página inicial" onclick="location.href='../index.php'"> <br>
						<input type="button" class="button" value="Loja Online" onclick="location.href='../Shopping.php'"> <br>
						&nbsp; <a href="create_user.php" class="button2">Adicionar Usuário</a> <br>
						<input type="button" class="button" value="Adicionar e Excluir Itens" onclick="location.href='insert.php'"> <br>
						<a href="home.php?logout='1'" class="button" style="color: red;">Sair</a> <br>
						
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>