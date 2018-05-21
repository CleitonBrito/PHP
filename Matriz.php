<!DOCTYPE html>
<html lang="pt-br">
<head>
		
	<meta charset="UTF-8"/>
	<title>Matriz</title>
	<link rel="stylesheet" type="text/css" href="_css/estilos.css">
</head>
<body>
<div>
	<h3>Matriz</h3>
	<pre>
	<?php
		$m = array(array(6,4), array(8,7), array(2,5));
		print_r($m);
		echo "</br> O valor encontrado na posição [0][1] é: ";
		print_r($m[0][1]);
	?>
	</pre>
</div>
</body>
</html>