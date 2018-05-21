<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Funções Aritmeticas</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<style>
		h2 {
			font: 15pt Arial;
			color: #171559;
			font-weight: bold;
		}
	</style>
</head>
<body>
<div>
	<h3>Funções Aritmeticas</h3>
	<?php
		$v1 = $_GET["x"];
		$v2 = $_GET["y"];
		echo "<h6>Inseira números para os parâmentros: x e y<br/>";
		echo "<h2>Valores recebidos: $v1 e $v2</h2>";
		echo "O valor absoluto de $v2 é ".abs($v2); //Eliminar o negativo
		echo "<br/>O valor de $v1<sup>$v2</sup> é ".pow($v1, $v2);
		echo "<br/>A raiz de $v1 é ". sqrt($v1);
		echo "<br/>O valor de $v2 arredondado é ".round($v2); // no lugar de round posso substituir por "ceil" que arredonda pra cima e "floor" que arredonda pra baixo;
		echo "<br/>A parte inteira de $v2 é ".intval($v2);
		echo "<br/>O valor de $v1 em moeda é R$".number_format($v1,2, ",", "."); 
		/*Formatação de número. 
		1º O valor a ser formatado
		2º Quantidade de casas decimais
		3º Separador
		4º Separador de milhar
		*/
	?>
</div>
</body>
</html>