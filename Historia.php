<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyectos</title>
	<?php
		include "includes/estilo.php";
	?>
</head>
<body>
	<?php
		include "includes/nav.php";
	?>
	<div class="wrapper">
				<h3>Historia de Guerrero</h3>
			    <div class="img-galle">
			      <a href=Prehis.php>
				  <div class="g-img"><img src="imagenes/prehis.jpg" height="200" width="300" />
				  </a>
				  <div class="overlay">
				  	<h2>Epoca Prehispanica</h2>
				  </div>
				  </div>
				  <a href=Colonia.php>
				  <div class="g-img"><img src="imagenes/aca.png" height="200" width="300" />
				  </a>
                  <div class="overlay">
				  	<h2>El Virreinato </h2>
				  </div>
				  </div>
				  <a href=Independencia.php>
				  <div class="g-img"><img src="imagenes/independencia.jpg " height="200" width="300" />
				  </a>
				  	<div class="overlay">
				  	<h2>Independencia de México</h2>
				  </div>
				  </div>
				  <a href=Revolucion.php>
				  <div class="g-img"><img src="imagenes/revolucion.jpg" height="200" width="300" />
				  </a>
				  	<div class="overlay">
				  	<h2>Revolución mexicana</h2>
				  </div>
				  </div>
				  <a href=Acamoder.php>
				  <div class="g-img"><img src="imagenes/acamoder.jpg" height="200" width="300" />
				  </a>
				  	<div class="overlay">
				  	<h2>México contemporáneo</h2>
				  </div>
				  </div>
			    </div>
	</div>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>