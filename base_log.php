<?php 

$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
  $db = mysql_select_db("uni",$link) or die("<h2>Error de Conexion</h2>");


 
  $correo=$_POST['email'];
  $contrasena=$_POST['pssd'];


mysql_query("select estudiante (correo,password) VALUES('$correo' ,'$contrasena')",$link);

?>
