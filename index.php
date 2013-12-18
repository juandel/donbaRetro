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
				<p class="small-7">Somos DONBA RETRO, lorem ipsum dolor sit amet, 
					consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet 
					dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud 
					exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
				</p>
				<p class="small-7" id="second">
					Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, 
					vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio 
					dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait 
					nulla facilisi. 
				</p>
				<img class="small-3" src="images/logo_quienesSomos.png">
			</div>
			<div class="footer">
				<p>Todos los derechos reservados | Don Balon © 2000</p>
				<p id="second">Telefonos (011) 4793 3211 / (011) 4793-3234 - ventas@donbalon.com.ar</p>
			</div>
		</div>
	</body>
</html>