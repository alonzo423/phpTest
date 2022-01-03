<?php 
session_start();
include_once 'assets/php/model/modeloUsuarios.php';
include_once 'assets/php/funciones.php';
$ModeloUsuarios = new ModeloUsuarios();
$Basicas = new Basicas();

if(@$_POST['inputEmail'] && @$_POST['inputPassword']){
   $inputPassword = $Basicas->encriptarContrasena($_POST['inputPassword']);
   
   $ModeloUsuarios->autentificaUsuario($Basicas->inyeccionSQL($_POST['inputEmail']), $inputPassword);
    
}else if(@!$_POST['inputEmail'] && @!$_POST['inputPassword']){
   $ModeloUsuarios->autentificaSession($_SESSION['idUsuario'], $_SESSION['pass']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pactica PHP JS</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body class="container">
	<header>
		<h1>Ejercicio PHP</h1>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a id="vinculoVer" class="nav-link" href="#">Ver <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a id="vinculoInsertar" class="nav-link" href="#">Insertar</a>
					</li>
				</ul>
			</div>
		</nav>

	</header>
	<section id="sectionContainer">
		ss
	</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/funciones.js"></script>
<script src="assets/js/operaciones.js"></script>
</body>
</html>