<?php
include("config.php");
$nombre = htmlspecialchars(trim($_POST['Name']));
$apell = htmlspecialchars(trim($_POST['LastName']));
$email = htmlspecialchars(trim($_POST['Email']));
$pass1 = trim($_POST['pass1']);
$pass2 = trim($_POST['pass2']);
//$email = htmlspecialchars(trim($_POST['email']));
$link = mysql_connect($datos[0],$datos[1],$datos[2]);
$query = sprintf("SELECT correo FROM estudiante WHERE estudiante.correo='%s'",
mysql_real_escape_string($email));
$result = mysql_db_query($datos[3],$query,$link);
if(mysql_num_rows($result)){
  echo'
    <script>
      alert("El usuario ya existe");
      location.href="register.php";
    </script>
';
  
} else {
mysql_free_result($result);
if($pass1 != $pass2){

  echo'
    <script>
      alert("Los Passwords deben coincidir");
      location.href="register.php";
    </script>
';
  
  }


else {
mysql_query("INSERT INTO estudiante (nombre,apellido,correo,password) VALUES('$nombre','$apell','$email' ,'$pass1')",$link) or die("<h2>Error Guardando los datos</h2>");
  echo'
    <script>
      alert("Registro Exitoso inicie sesion para continuar");
      location.href="login.html";
    </script>
';
}
}


?>
