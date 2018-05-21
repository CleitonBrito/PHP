<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Operações Aritmeticas por link</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div>
	<h3>Operações Aritmeticas por link</h3>
	<?php
		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		echo "<h6>Inseira números para os parâmentros:<br/>
		Exemplo: ?a=8&b=5 no link<br/>
		Assim, a recebe 8 e b recebe 5<h6/>";
		echo "<h2>Operações entre $n1 e $n2: </h2><br/>";
		echo "A soma é: ".($n1+$n2);
		echo "<br/>A subtração é: ".($n1-$n2);
		echo "<br/>A multiplicação é: ". ($n1*$n2);
		echo "<br/>A divisão entre é: ".($n1/$n2);
		echo "<br/>O resto da divisão é: ".($n1%$n2);
		echo "<br/> A média vale: ".(($n1+$n2)/2);
	?>
</div>
</body>
</html>