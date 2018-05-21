<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Operadores Relacionais</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div>
	<h3>Operadores Relacionais</h3>
	<?php
		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		$tipo = $_GET["op"];
		echo "<h6>Insira valores para a, b e op<br/>Se op=s, soma, senão multiplica</h6>";
		echo "<br/>Os valores passados foram $n1 e $n2<br/>";
		$r=($tipo == "s")?$n1+$n2:$n1*$n2;
		echo "O resultado será $r<br/>";
		echo "<h6>Iguais ou identicos</h6>";
		$v1 = 3;
		$v2 = "3";
		$r = ($v1 == $v2)?"SIM":"Não"; // Teste se o valor interno é igual
		echo "$v1 é igual a $v2?<br/> $r<br/></br>";
		$r = ($v1 === $v2)?"SIM":"Não"; // Teste se o valor interno e o tipo de variável são iguais
		echo "$v1 é identico a $v2?<br/> $r";
	?>
</div>
</body>
</html>