<?php include 'remeras.php'; ?>
<html>
<head>
	<title>Donba Retro</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="js/foundation/foundation.topbar.js"></script>
	<script src="js/foundation/foundation.js"></script>
</head>
	<body>
		<div class= 'small-10 small-centered columns wrapper'>
			<h1>Donba Retro - las leyendas nunca mueren </h1>
			<nav class="top-bar" data-topbar>
				<section class="top-bar-section">
				    <ul class="right">
				      <li><a href="#">INICIO</a></li>
				      <li><a href="#">CAMISETAS</a></li>
				      <li><a href="#">PERSONALIZADAS</a></li>
				      <li><a href="#">CONTACTO</a></li>
				      <li><a href="#">FACEBOOK</a></li>
				      <li><a href="#">TWITTER</a></li>
				    </ul>
				</section>
			</nav>
			<div class="slider"></div>
			<div class="content">
				<h2>LAS DESTACADAS !</h2>	
				<div class="remeras">
				<?php 
				remeras_index();
				?>
				</div>
				<div class="leyends"></div>
			</div>
			<div class="quienSomos">
				<h2>QUIENES SOMOS ?</h2>
				<p class="small-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<img class="small-3" src="images/logo_large">
			</div>
			<div class="footer">
				<p>Todos los derechos reservados | Don Balon © 2000</p>
				<p>Telefonos (011) 4793 3211 / (011) 4793-3234 - ventas@donbalon.com.ar</p>
			</div>
		</div>
	</body>
</html>