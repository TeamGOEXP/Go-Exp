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
	<link rel="shortcut icon" href="./imgs/logo.png">
	<link rel="stylesheet" href="./styles/estilos-home.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">

</head>
<body>
	<input type="checkbox" id="check">
	<label for="check">
		<i class="fas fa-bars" id="btn"></i>
		<i class="fas fa-times" id="cerrar"></i>
	</label>
	<div class="sidebar">
		<header>Go Exp
		<br>
		<span class="user-info">
			<small>Bienvenid@</small>
			<br>
			<!-- Mostrar Nombre del Usuario Logueado-->
			<?php echo utf8_decode($row['NombreC']);?>	
		</span>

		</header>

		<ul class="menu">

			<li><a href="index.html"><span class="fa fa-home icon-menu"></span>Inicio</a></li>
			<li class="item-submenu" menu="1">
					<a href="#"><span class="fa fa-suitcase icon-menu"></span>Servicios</a>
					<!--<ul class="submenu">
						<li class="title-menu"><span class="fa fa-suitcase icon-menu"></span>Servicios</li>
						<li class="go-back">Atras</li>

						<li><a href="#">Tutoriales</a></li>
						<li><a href="#">Cursos</a></li>
						<li><a href="#">Documentos</a></li>
					</ul>-->
			</li>
			<li><a href="#"><span class="fa fa-plus-circle icon-menu"></span>Crear experiencia</a></li>
			<li><a href="#"><span class="fa fa-question-circle icon-menu"></span>Ayuda</a></li>
			<li><a href="contacto.html"><span class="fa fa-envelope"></span>Contacto</a></li>
			<li><a href="php/salir.php"><span class=" fa fa-power-off"></span>Salir</a></li>
		</ul>
	</div>
	
	<section>
		<div class="img-header">
            <div class="welcome">
                <h1>Bienvenidos a GoExp</h1>
                
                <p>¡ conecta tú experiencia con el mundo !</p>
                <a href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Crea tú experiencia
                </a>
            </div>
        </div>
	</section>

	
	
	
	<script src="js/jquery.js"></script>
    <script src="js/main-home.js"></script>
</body>
</html>