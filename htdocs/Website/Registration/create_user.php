<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Criar Usuário</title>
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
		<h2>Admin - Criar Usuário</h2>
	</div>
	
	<form method="post" action="create_user.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Tipo de Usuário</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Administrador</option>
				<option value="user">Usuário</option>
			</select>
		</div>
		<div class="input-group">
			<label>Senha</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirme a senha</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn"> Criar novo usuário</button>
		</div>
	</form>
</body>
</html>