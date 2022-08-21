<?php
require('../db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM products WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: view.php"); 
?>