<html>
  <head></head>
  <body>
  <center><font face="Times New Roman" size="7" color="Black"<b><b>Market</b></b></td></font></center>
  <form name="frm1" action="insert_prod.php" method="POST">
    <table border="0" align="center">
      <tr>
        <td align=center ><font face="Times New Roman" size="4" color="black"<b><b>Codigo producto: <font></font></b></b></td></font>
        <td align=center> <input type="text" name="codprod" placeholder="Ingrese codigo" required onkeyup = "this.value=this.value.toUpperCase()" /></td>
      </tr>
      <tr>
        <td align=center ><font face="Times New Roman" size="4" color="black"<b><b>Nombre producto: <font></font></b></b></td></font>
        <td align=center> <input type="text" name="nomprod" placeholder="Ingrese nombre" required onkeyup = "this.value=this.value.toUpperCase()" /></td>
      </tr>
      <tr>
        <td align=center ><font face="Times New Roman" size="4" color="black"<b><b>Cantidad: <font></font></b></b></td></font>
        <td align=center> <input type="text" name="cantprod" placeholder="Ingrese cantidad" required onkeyup = "this.value=this.value.toUpperCase()" /></td>
      </tr>
      <tr>
        <td align=center><font face="Times New Roman" size="4" color="black"<b><b>Estado: <font></font></b></b></td></font>
        <td align=center><select name="estprod">
<option value="0">...</option>
 <option value="1">Habilitado</option>
 <option value="2">Desabilitado</option>
</table>
<br><br>
<center><input type="submit" value="Registrar"></center>
</form>
</body>
</html>
<table border = 1 align = "center">
  <tr><th>CÒDIGO</th><th>NOMBRE</th><th>CANTIDAD</th><th>.</th><th>..</th></tr>

<?php
//1. Database connection
include("database.php");
//2. Create and execute SQL
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);
//3. Show data
if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row["codigo_prod"]."</td>";
    echo "<td>".$row["nombre_prod"]."</td>";
    echo "<td>".$row["cantidad"]."</td>";
    echo "<td><a href='delete_product.php?cod=".$row["codigo_prod"]."'><img src='Icons/2.png'width='20'></a></td>";
    echo "<td><img src='Icons/1.png'width='20'></td>";
    echo "</tr>";
  }
}else{
  echo "<center>::: No hay productos registrados :::</center><br>";
}
?>
