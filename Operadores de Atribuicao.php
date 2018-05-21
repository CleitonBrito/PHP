<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Operadores de Atribuição</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div>
	<h3>Operadores de Atribuição</h3>
	<?php
		$preco = $_GET["p"]; //Recebe valores pelo LINK
		echo "<h6>Inseira números para os parâmentros:<br/>
		Exemplo: ?p=100 no link<br/></h6>";
		echo "<h3>Calcular 10% de aumento de um produto.</h3><br/>";
		echo "O preço do produto é R$ ".number_format($preco, 2,",",".");
		$preco += ($preco*10/100);
		echo "<br/> E o novo preço com 10% de aumento será R$ ".number_format($preco,2,",",".");
	?>
</div>
</body>
</html>