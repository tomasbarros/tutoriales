<!DOCTYPE html>
<html>
<head>
	<title>Funcion Date - Spanish</title>
</head>
<body>
		<div class="indice" align="center">
<h2>Función 'DATE' en PHP.</h2>
<p>Índice</p>
<li><a href="#uso">Uso</a></li>
		</div>

		<div id="uso">
			<h2>Uso y código</h2>
				<p>Explicación: La función 'date' es una función de PHP, esta nos permitirá mostrar/imprimir la fecha en documentos php, la función
				es muy sencilla.</p>
				<p>Sintáxis: 'date('argumentos');'</p>
				<p>Bien, ya sabemos como 'funciona', ahora, lo usaremos, hay que tener en cuenta que usará la hora local del servidor.</p>
				<?php 
					/* Iniciamos código PHP */
					echo date('\H\o\y \e\s j\/n\/Y');
				?>
				<p>Si ejecutaste bien el código te imprimiría algo como: "Hoy es 23/02/2018"</p>
		</div>
</body>
</html>
