<!DOCTYPE html>
<html lang="pt-br">
<head>
		
	<meta charset="UTF-8"/>
	<title>Caneta</title>
	<link rel="stylesheet" type="text/css" href="\_css/estilos.css">
</head>
<body>
<div>
	<h3>Caneta</h3>
	<pre>
	<?php
		require_once 'Caneta.php';
		$c1 = new Caneta;
		$c1->cor = "Azul";
		$c1->ponta = 0.5;
		$c1->tampada = false;
		$c1->tampar();
		print_r($c1);

		$c2 = new Caneta;
		$c2->cor = "Verde";
		$c2->carga = 50;
		$c2->tampar();

		print_r($c2);
	?>
</pre>
</div>
</body>
</html>