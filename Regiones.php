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
	<section class="contenido">
				<h3>Las 7 regiones del Estado de Guerrero</h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/zonas.png" alt="" height="500" width="940">
					</figure>
					<br>
					<br/> 
					<div class="wrapper">
			    <div class="img-galle">
			      <a href=Acapulco.php>
				  <div class="g-img"><img src="imagenes/regionacapulco.jpg" height="200" width="350" />
				  </a>
				  <div class="overlay">
				  	<h2>ACAPULCO</h2>
				  </div>
				  </div>
				  <a href=costagrande.php>
				  <div class="g-img"><img src="imagenes/costagrande.jpg" height="200" width="350" />
				  </a>
                  <div class="overlay">
				  	<h2>REGION COSTA GRANDE</h2>
				  </div>
				  </div>
				  <a href=costachica.php>
				  <div class="g-img"><img src="imagenes/costachica.jpg" height="200" width="350" />
				  </a>
				  	<div class="overlay">
				  	<h2>REGION COSTA CHICA</h2>
				  </div>
				  </div>
				  <a href=centro.php>
				   <div class="g-img"><img src="imagenes/zonacentro.jpg" height="200" width="350" />
				  </a>
				  	<div class="overlay">
				  	<h2>ZONA CENTRO</h2>
				  </div>
				  </div>
				  <a href=montaña.php>
				 <div class="g-img"><img src="imagenes/montaña.jpg" height="200" width="350" />
				  </a>
				  	<div class="overlay">
				  	<h2>REGION MONTAÑA</h2>
				  </div>
				  </div>
				  <a href=norte.php>
				 <div class="g-img"><img src="imagenes/norte.jpg" height="200" width="350" />
				  </a>
				  	<div class="overlay">
				  	<h2>REGION NORTE</h2>
			    </div>

			    <a href=caliente.php>
				 <div class="g-img"><img src="imagenes/tierracaliente.jpg" height="200" width="350" style="float:center;" />
				  </a>
				  	<div class="overlay">
				  	<h2>REGION TIERRA CALIENTE</h2>
			    </div>
	</div>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>