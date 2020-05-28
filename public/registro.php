
<?php
 include ("./php/conexion.php");

 //Registro de Usuario
 if (isset($_POST["registrar"]))
 {
	$nombre = mysqli_real_escape_string($conexion,$_POST['nombre']);
	$correo = mysqli_real_escape_string($conexion,$_POST['correo']);
	$usuario = mysqli_real_escape_string($conexion,$_POST['user']);
	$assword = mysqli_real_escape_string($conexion,$_POST['pass']);

	$password_encriptada = sha1($assword);

	$sqluser = "SELECT idusuarios FROM usuarios
					 WHERE usuario = '$usuario'";

	$resultadouser = $conexion->query($sqluser);
	$filas = $resultadouser->num_rows;

	if ($filas > 0)
	{
		echo "<script>
		
			alert('el usuario ya existe');
			window.location = 'registro.php';

		</script>";
	}
	else
	{
		$sqlusuario = "INSERT INTO usuarios(NombreC,Correo,usuario,assword)
		VALUES ('$nombre','$correo','$usuario','$password_encriptada')";
	
		$resultadousuario = $conexion->query($sqlusuario);
		if ($resultadousuario > 0)
		{
			echo "<script>
		
			alert('Registro exitoso');
			window.location = 'ingreso.php';

			</script>";
		}
		else
		{
			echo "<script>
		
			alert('Error al registrarse');
			window.location = 'registro.php';

			</script>";
		}
	}
 }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="./styles/style_registro.css" rel="stylesheet">
    <link rel="shortcut icon" href="./imgs/logo.png">

    <title>GoExp | Registro</title>
  </head>
  <body>
    
    <section class="contact-box">
        <div class="row no-gutters bg-dark">
            <div class="col-xl-5 col-lg-12 register-bg">
                <div class="position-absolute testimonial p-4 colo">
                    <h3 class="font-weight-bold text-light">¡Es hora de empezar!</h3>
                    <p class="lead text-light">conecta tú experiencia con el mundo.</p>
                </div>

            </div>
            <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3">Crea tu cuenta  gratis</h1>
                    <div class="form-group">
                        <button class="btn btn-outline-dark d-inline-block text-light mr-2-mb-3 width-100"><i class="icon ion-logo-google lead
                            align-middle mr-2" ></i >Google</button>
                        <button class="btn btn-outline-dark d-inline-block text-light mr-2 width-100"><i class="icon ion-logo-facebook lead
                            align-middle mr-2" ></i >Facebook</button>
                        <button class="btn btn-outline-dark d-inline-block text-light mr-2 width-100"><i class="icon ion-logo-twitter lead
                            align-middle mr-2" ></i >Twitter</button>
                    </div>
                    <p class="text-muted mb-5">Ingresa la siguiente información para registrarte.</p>

                    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">

                        <div class="form-group col-mb-3">
                            <label class="font-weight-bold">Nombre completo<span class="text-danger">*</span></label>
                            <input type="text" name="nombre" class="form-control" placeholder="Ingresa tu nombre completo" required>
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Correo Electrónico<span class="text-danger">*</span></label>
                            <input type="email" name="correo" class="form-control" placeholder="Ingresa tu correo electrónico"required>
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Usuario<span class="text-danger">*</span></label>
                            <input type="text" name="user" class="form-control" placeholder="Ingresa tu usuario"required>
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Contraseña<span class="text-danger">*</span></label>
                            <input type="password" name="pass" class="form-control" placeholder="Ingresa tu contraseña"required>
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Confirmación contraseña<span class="text-danger">*</span></label>
                            <input type="password" name="passr" class="form-control" placeholder="Vuelva a ingresar tu contraseña"required>
                        </div>

                        <div class="form-group mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label text-muted" required>Al seleccionar esta casilla aceptas los términos y condiciones 
                                </label>

                            </div>
                        </div>

                        <button  type="submit" name="registrar" class="curso width-100 btn2">Regístrate</button>
                     

                    </form>
                    <br>
                    <small class="d.inline-block text-muted mt-5">GOEXP &copy; 2019 All rights reserved.</small>
                </div>
            </div>
        </div>
    </section>

    <div class="btn1">
        <a href="index.html" class="btn width-100"> Volver!</a> 
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  

</body>
</html>