<?php
$codigo = $_GET['cod'];

//1. Database connection
include ("database.php");
//2. Create SQL to delete
$sql = "DELETE FROM productos WHERE codigo_prod = '$codigo'";
//3. Execute SQL
$conn->query($sql);
//4. Condirm transaction
echo"<script language='javascript'>alert(':::producto eliminado con exito:::')</script>";
header("Refresh:0;url=index.php");
 ?>
