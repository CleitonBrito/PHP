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
		$c1->setModelo("BIC");
		$c1->setPonta(0.5);
		
		print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
	?>
</pre>
</div>
</body>
</html>