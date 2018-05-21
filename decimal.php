<!DOCTYPE html>
<html lang="pt-br">
<head>
		
	<meta charset="UTF-8"/>
	<title>Decimal</title>
	<link rel="stylesheet" type="text/css" href="_css/estilos.css">
</head>
<body>
<div>
	<h3>Decimal para Caracter</h3>
	<?php
		$decimal = $_GET["dec"];

		echo "<h3>Convertendo...</h3>";
		echo "O número <span class='foco'> $decimal </span> equivale a letra: <span class='foco'>".chr($decimal)."</span>.";
	?>
	<a class="botao" href="decimal.html">Voltar</a>
</div>
</body>
</html>