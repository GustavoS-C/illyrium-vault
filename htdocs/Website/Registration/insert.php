<?php
require('../db.php');
include("functions.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $name =$_REQUEST['name'];
    $price = $_REQUEST['price'];
    $code = $_REQUEST['code'];
    $image = $_REQUEST['image'];
    $ins_query="insert into products (`name`,`price`,`code`,`image`) values ('$name','$price','$code','$image')";
    mysqli_query($conn,$ins_query)
    or die(mysqli_error($conn));
    $status = "Novo item inserido com sucesso!
    </br></br><a href='view.php'>Ver estoque atualizado</a>";
}
?>  
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inserir novo item</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form">
<p><a href="home.php">Página de Administração</a> 
| <a href="logout.php">Logout</a></p>
<div>
<h1>Adicione um novo item!</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Adicione o nome" required /></p>
<p><input type="" name="price" placeholder="Adicione o preço" required /></p>
<p><input type="text" name="code" placeholder="Adicione o código" required /></p>
<p><input type="file" name="image" placeholder="Selecione a imagem desejada" required /></p>
<p><input name="submit" type="submit" value="Adicionar" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>