 <?php
$conexion = @mysql_connect("localhost","root","");
if (!$conexion){ die("No pudo efectuarse la conexi�n: ". mysql_error());}
mysql_select_db("base",$conexion);
?>
