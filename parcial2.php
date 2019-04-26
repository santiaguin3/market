<html>
 <body bgcolor="F3E2A9">
  <form name=frm1 action="parcial2.php" method="POST">
   <center><font face="Times New Roman" size="7" color="black"<b><b> Retiros en efectivo </b></b></font><br><br></center>
    <table border="0" align="center">
     <td align=center> <font face="Times New Roman" size="4" color="black"<b><b> Ingrese la cantidad de dinero a retirar: </b></b></td></font>
      <td align=center><input type="number" name="cantidad" placeholder="Digite cantidad">
       <br></table></br>
        <center><input type="submit" value="Procesar"></center>
         </form>
          </body>
           </html>
<?php
 $n=$_POST['cantidad'];
  echo "<p><b><b>La cantidad solicitada fue de: </b></b>".$n."  monedas</p>";
   // En un array colocamos todas las monedas posibles para el problema
    $monedas=array(100, 50, 20, 10, 5, 2, 1, 0.5, 0.20, 0.10, 0.05, 0.02, 0.01);
     // Creamos un array con la misma cantidad de monedas
      $cambio=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
       // Recorremos todas las monedas
        for($i=0; $i<count($monedas); $i++)
          {
         // Por medio de un if comprobamos si la cantidad actual, es superior a la moneda
          if($n>=$monedas[$i])
           {
            // Obtenemos cantidad de monedas
             $cambio[$i]=floor($n/$monedas[$i]);
              // Actualizamos el valor del importe que nos queda por didivir
               $n=$n-($cambio[$i]*$monedas[$i]);
                }
                 }
                  // Mostramos el resultado
                   echo "<b>Su cambio es de: <br></b>";
                    for($i=0; $i<count($monedas); $i++)
                     {
                      if($cambio[$i]>0)
                       {
                        if($monedas[$i]>=5)
                         echo "".$cambio[$i]." monedas de: ".$monedas[$i]." <br>";
                          else
                           echo "".$cambio[$i]." monedas de: ".$monedas[$i]." <br>";
                      }
                 }
          ?>
