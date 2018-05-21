<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Declarando Variáveis</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div>
	<h3>Variáveis</h3>
	<?php
		$nome = "Cleiton";
		$idade = 17; 
		// Posso forçar a variavel ser string assim: $nome = (string) "Cleiton";
		echo "Posso escrever de duas formas: <br/><br/>";
		echo '"$nome. " tem " .$idade. " anos!"<br/>';
		echo $nome. " tem " .$idade. " anos!<br/><br/>";
		echo '"$nome tem $idade anos!"<br/>';
		echo "$nome tem $idade anos!";
	?>
</div>
</body>
</html>