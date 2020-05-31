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

	<link rel="stylesheet" href="./styles/estilos-home.cs">

	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<span id="button-menu" class="fa fa-bars"></span>

		<nav class="navegacion">
			<ul class="menu">

				<span class="user-info">
					<small>Bienvenid@</small>
					<!-- Mostrar Nombre del Usuario Logueado-->
					<?php echo utf8_decode($row['NombreC']);?>	
				</span>
				<li><a href="#"><span class="fa fa-home icon-menu"></span>Inicio</a></li>

				<li class="item-submenu" menu="1">
					<a href="#"><span class="fa fa-suitcase icon-menu"></span>Servicios</a>
					<ul class="submenu">
						<li class="title-menu"><span class="fa fa-suitcase icon-menu"></span>Servicios</li>
						<li class="go-back">Atras</li>

						<li><a href="#">Tutoriales</a></li>
						<li><a href="#">Cursos</a></li>
						<li><a href="#">Documentos</a></li>
					</ul>
				</li>
				<!--
				<li class="item-submenu" menu="2">
					<a href="#"><span class="fa fa-shopping-bag icon-menu"></span>Tienda</a>
					<ul class="submenu">
						<li class="title-menu"><span class="fa fa-shopping-bag icon-menu"></span>Tienda</li>
						<li class="go-back">Atras</li>

						<li><a href="#">Laptops</a></li>
						<li><a href="#">Smarphones</a></li>
						<li><a href="#">Consolas de viejuegos</a></li>
					</ul>
				</li>
				-->
				<li><a href="#"><span class="fa fa-plus-circle icon-menu"></span>Crear experiencia</a></li>
				<li><a href="#"><span class="fa fa-question-circle icon-menu"></span>Ayuda</a></li>
				<li><a href="php/salir.php"><i class="ace-icon fa fa-power-off"></i>Salir</a></li>
			</ul>
		</nav>
	</header>
	
	<!----------------------------contenido prinicipal de la pagina--------------------------->
	<div class="contenedor">
		<section class="contenido-header">
			<section class="textos-header">
				<h1>¡Conecta tú experiencia con el mundo!</h1>
				<p>¿Quieres empezar a crear tú experiencia? es fácil, solo da clic en este botón</p>
				<a href="#">CREAR</a>
			</section>
			
		</section>
	</div>

	<main>
		<!-------------------------empezamos los sections para todo el contenido que contendra esta pagina------------------>
		<section class="info">
        	<div class="contenedor">
          	  	<h2 class="titulo left">Juntos podemos apoyar</h2>
           		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        	</div>
    	</section>
		<section class="questions contenedor">
        	<section class="textos-questions">
				<p>"Ni la sociedad, ni el hombre, ni ninguna otra cosa deben sobrepasar para ser buenos los límites establecidos por la naturaleza."</p>
            	<h1> - Hipócrates</h1>
        	</section>
        	
        </section>
	</main>
	
</body>
</html>