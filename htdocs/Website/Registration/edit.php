<?php
require('db.php');
include("../functions.php");
$id=$_REQUEST['id'];
$query = "SELECT * from products where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Atualizar Item</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form">
<p><a href="home.php">Página de Administração</a> 
| <a href="insert.php">Inserir novo item</a> 
| <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$price = $_REQUEST['price'];
$code = $_REQUEST['code'];
$image = $_REQUEST['image'];
$update="update products set trn_date='".$trn_date."',
name='".$name."', price='".$price."',' where id='".$id."'";
mysqli_query($conn, $update) or die(mysqli_error());
$status = "Item atualizado com sucesso. </br></br>
<a href='view.php'>Ver estoque atualizado</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="price" placeholder="Enter price" 
required value="<?php echo $row['price'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>