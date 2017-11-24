
<!--<!DOCTYPE html>-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Plan seguimiento universitario</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>



<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Crear una cuenta</div>
      <div class="card-body">

        <form method="post" action="base_registro.php" >
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="Name">Nombre</label>
                <input class="form-control" name="Name" type="text" aria-describedby="nameHelp" placeholder="Introduce tu nombre" required="">
              </div>
              <div class="col-md-6">
                <label for="LastName">Apellido</label>
                <input class="form-control" name="LastName" type="text" aria-describedby="nameHelp" placeholder="Apellido" required="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="Email">Correo electronico</label>
            <input class="form-control" name="Email" type="email" aria-describedby="emailHelp" placeholder="Introduce tu correo" required="">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="pass">Contraseña</label>
                <input class="form-control" name="pass1" id="pass1" type="password" placeholder="contraseña" required="">
              </div>
              <div class="col-md-6">
                <label for="confirmarcontraseña">Confirmar contraseña</label>
                <input class="form-control" id="pass2"  name="pass2" type="password" placeholder="Confirmar contraseña">
               

                

  
              </div>
            </div>
          </div>
          <button method="post" type="submit" class="btn btn-primary btn-block" >Enviar</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Iniciar sesion</a>
          <a class="d-block small" href="forgot-password.html">Olvido su contraseña?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
