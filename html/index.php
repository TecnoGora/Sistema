<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Inicio De Sesion</title>
</head>
<body>
	<header class="header">
		<div class="image-container">
			<img class="image_full-size" src="../images/membrete_universidad.jpeg">
		</div>
	</header>
	<div class="flex-container">

		<div class="side_left">
				
			<form action="../php/prueba.php" method="POST" class="sign_form">

				<!-- <div class="image-container-logo">
					<img src="../images/consejos-comunales-logo.png">
				</div> -->

				<h1>
					INICIO DE SESION
				</h1>
				
				<input type="text" name="usr" placeholder="Ingrese su usuario" class="input_inf"><br>

				<input type="password" name="passwd" placeholder="Ingrese su contraseña" class="input_inf"><br>

				<input type="submit" name="snd" value="Iniciar Sesion"><br>

			</form>

			
		</div>
		
		<div class="side_right">

			<!-- <div class="auth_conection">
				<p>
					<?php 
						#$connect_user = pg_connect("host=localhost dbname=postgres user=postgres password=3rud1c10n");
#
						#if($connect_user) {
						#	echo "Se conecto a la base de datos satisfactoriamente";
						#} else {
						#	echo "No se logro conectar a la base de datos";
						#}

					?>
				</p>
			</div>

			<div class="auth_conection">
				<?php
					#require '../php/prueba.php';

					#if ($auth == 0) {
					#	echo "Datos Incorrectos";
					#}
				?>
			</div> -->
			<div class="box_side_right">
				
			</div>
			
		</div>

		<footer class="footer">
			<h1>
				Este es el footer, espacio que se deja normalmente para ua firma o redes sociales.
			</h1>
		</footer>

	</div>
</body>
</html>


