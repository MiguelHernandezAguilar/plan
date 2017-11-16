<?php 

$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
  $db = mysql_select_db("uni",$link) or die("<h2>Error de Conexion</h2>");

  //obtenemos los valores del formulario
  


//include('register.php');
//$estudiante= new estudiante();
//if($_POST) {
  $nombre=$_POST['Name'];
  $apellido=$_POST['LastName'];
  $correo=$_POST['Email'];
  $contrasena=$_POST['pass'];

  //$estudiante->guardar();

mysql_query("INSERT INTO estudiante (nombre,apellido,correo,password) VALUES('$nombre','$apellido','$correo' ,'$contrasena')",$link) or die("<h2>Error Guardando los datos</h2>");
  echo'
    <script>
      alert("Registro Exitoso inicie sesion para continuar");
      location.href="login.html";
    </script>
  '


?>
