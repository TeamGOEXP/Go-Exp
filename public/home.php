<?php

include ("./php/conexion.php");

session_start();
if (!isset($_SESSION['id_usuario']))
{
	header("Location: ingreso.php");
}

$iduser = $_SESSION['id_usuario'];

$sql = " SELECT idusuarios, NombreC FROM usuarios WHERE
idusuarios='$iduser'";

$resultado=$conexion->query($sql);
$row = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>GOEXP | Hogar</title>
	<link rel="stylesheet" href="./styles/estilos-home.css">
    <link rel="stylesheet" href="./styles/font-awesome.css">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
</head>
<body>
<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						

						

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/user.jpg"  />
								<span class="user-info">
									<small>Bienvenid@</small>
									<!-- Mostrar Nombre del Usuario Logueado-->
									<?php echo utf8_decode($row['NombreC']);?>	
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">


								<li>
									<a href="#">
										<i class="ace-icon fa fa-user"></i>
										Perfil
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="php/salir.php">
										<i class="ace-icon fa fa-power-off"></i>
										Salir
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
</body>
</html>