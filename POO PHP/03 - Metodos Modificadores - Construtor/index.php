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
		$c1 = new Caneta("BIC", "Azul", 0.5);
		$c2 = new Caneta("NIC", "Verde", 0.8);
		
		print_r($c1);
		print_r($c2);
	?>
</pre>
</div>
</body>
</html>