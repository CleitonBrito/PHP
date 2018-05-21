<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Operadores Lógicos</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div>
	<h3>Operadores Lógicos</h3>
	<?php
		$ano = $_GET["ano"];
		$idade = date("Y") - $ano;
		echo "<h6>Insira o ano de nascimente e descubra se o<br/>
		cidadão pode ou deve votar.</h6>";
		echo "Quem nasceu em $ano tem idade de $idade anos.";
		$tipo=($idade >= 18 && $idade < 65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
		echo " E dessa forma seu voto é $tipo.";
	?>
</div>
</body>
</html>