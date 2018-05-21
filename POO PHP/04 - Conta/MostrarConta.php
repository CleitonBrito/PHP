<!DOCTYPE html>
<html lang="pt-br">
<head>
		
	<meta charset="UTF-8"/>
	<title>Conta  Bancária</title>
	<link rel="stylesheet" type="text/css" href="\_css/estilos.css">
</head>
<body>
<div>
	<h3>Conta Bancária</h3>
	<pre>
	<?php
		require_once 'Contafunc.php';
		$c1 = new Conta;
		$c1->getTipo($tipo);
		$c1->getDono($dono);
		print_r($c1);
		echo "<a class='botao' href='index.html'>Home</a>";
	?>
</pre>
	

</div>
</body>
</html>