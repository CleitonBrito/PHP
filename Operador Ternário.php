<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Operador Ternário</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div>
	<h3>Operador Ternário</h3>
	<?php
		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		$media = ($n1+$n2)/2;
		echo "<h6>Utilizando operador unário para<br/>
		fazer pequenas condições</h6>";
		echo "Média: $media<br/>";
		echo "Situação: ".(($media<7)?"Reprovado":"Aprovado");
	?>
</div>
</body>
</html>