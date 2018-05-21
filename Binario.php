<!DOCTYPE html>
<html lang="pt-br">
<head>
		
	<meta charset="UTF-8"/>
	<title>Binário</title>
	<link rel="stylesheet" type="text/css" href="_css/estilos.css">
</head>
<body>
<div>
	<h3>Binário para Decimal</h3>
	<?php
		$binario = $_GET["bin"];

		echo "<h3>Convertendo...</h3>";
		$decimal = bindec($binario);
		echo "O número <span class='foco'> $binario </span> para decimal é <span class='foco'> $decimal</span>.";
	?>
	<a class="botao" href="binario.html">Voltar</a>
</div>
</body>
</html>