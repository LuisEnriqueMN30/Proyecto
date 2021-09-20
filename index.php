<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<?php
		include "includes/estilo.php";
	?>
</head>
<body>
	<?php
		
		include "includes/nav.php";
		include "includes/slider.php";
	?>
	
	<section class="contenido">
			<h3>ESTADO DE GUERRERO</h3>
			<article class="serv1">
				<h4>TURISMO</h4>
				<p>
					En guerrero la activad turística se realiza fundamental mente en tres destinos denominado “Triángulo del Sol”, el cual agrupa a las ciudades de Taxco, Ixtapa Zihuatanejo y Acapulco. Así como diverso pueblos mágicos y playas vírgenes en las regiones Costa chica y costa grande. 
				</p>
				<figure>
					<a href=turismo.php>
					<img src="imagenes/slide02.jpg" alt="">
					 </a>
				</figure>
			</article>
			<article class="serv1">
				<h4>REGIONES</h4>
				<p>
					Las Regiones del estado de Gurrero son las divisiones geoculturales en las que se divide el Estado de Guerrero desde 1942. Existen 8 regiones en el Estado, Acapulco, Costa Chica, Costa Grande, Centro, La Montaña, Región Norte, Tierra Caliente y Sierra.
				</p>
				<figure>
					<a href=Regiones.php>
					<img src="imagenes/taxco.jpg" alt="">
					</a>
				</figure>
			</article>
			<article class="serv1">
				<h4>BIODIVERCIDAD</h4>
				<p>
					Guerrero en la actualidad es de los Estados mas importantes en cuanto a riqueza de fauna y flora, posee por lo menos 6000 especies de plantas, una parte de las estimadas en todo el país, por lo cual se le considera una de las entidades con mayor diversidad bilógica. 
				</p>
				<figure>
					<a href=biodivercidad.php>
					<img src="imagenes/Jaguar.jpg" alt="">
					</a>
				</figure>
			</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>