<!DOCTYPE html>
<html lang="pt-br">
<head>
		
	<meta charset="UTF-8"/>
	<title>Binario to Caracter</title>
	<link rel="stylesheet" type="text/css" href="_css/estilos.css">
</head>
<body>
<div>
	<h3>Binario to Caracter</h3>
	<?php
		$binario = $_GET["bin"];

		echo "<h3>Convertendo...</h3>";
		$char = chr(bindec($binario));
		echo "O número binário <span class='foco'> $binario </span> equivale a letra <span class='foco'> $char</span>.";
	?>
	<a class="botao" href="Binario to Caracter.html">Voltar</a>
	<footer align="center" class="footer">
		&copy Cleiton Brito
	</footer>
</div>
</body>
</html>