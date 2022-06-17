<?php 
session_start();
if (!empty($_SESSION['active'])) {
	header('Location: administrador/');
} else if (!empty($_SESSION['activeP'])) {
	header('Location: profesor/');
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

	<title>Sistema Escolar</title>
</head>
<body>
	<header class="main-header">
		<div class="main-cont">
			<div class="desc-header">
				<img src="images/school.svg" alt="image school">
				<p>Sistema de gestión escolar</p>
			</div>
		</div>   
		<div class="cont-header">
			<h1>Bienvenido</h1>

			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Administrador</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profesor</button>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
					
					<form action="" onsubmit="return validar()">
						<label for="usuario">Usuario</label>
						<input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario">
						<label for="password">Contraseña</label>
						<input type="password" name="pass" id="pass" placeholder="Contraseña">
						<div id="messageUsuario"></div>
						<button id="loginUsuario" type="button">INICIAR SESION</button>
					</form>
				</div>
				<div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

					<form action="" onsubmit="return validar()">
						<label for="usuario">Usuario</label>
						<input type="text" name="usuarioProfesor" id="usuarioProfesor" placeholder="Nombre de usuario">
						<label for="password">Contraseña</label>
						<input type="password" name="passProfesor" id="passProfesor" placeholder="Contraseña">
						<div id="messageProfesor"></div>
						<button id="loginProfesor" type="button">INICIAR SESION</button>
					</form>
				</div>
			</div>

		</div>


	</header>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/login.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</body>
</html>