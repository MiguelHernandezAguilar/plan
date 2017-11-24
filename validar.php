<?php
include("config.php");
$email = htmlspecialchars(trim($_POST['email']));
$pass = htmlspecialchars(trim($_POST['pass']));
$link = mysql_connect($datos[0],$datos[1],$datos[2]);


$query = sprintf("SELECT correo,password FROM estudiante WHERE estudiante.password='%s' && estudiante.correo='%s'",
mysql_real_escape_string($pass),mysql_real_escape_string($email));
$result = mysql_db_query($datos[3],$query,$link);

if(mysql_num_rows($result)){

    
        echo'
        <script>
        
      location.href="index.html";
       </script>
         ';
  
} 
else {


  echo'
     <script>
        alert("Datos erroneos");
      location.href="login.html";
       </script>
';
  
  }
 


?>