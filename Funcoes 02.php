<!DOCTYPE html>
<html lang="pt-br">
<head>
		
	<meta charset="UTF-8"/>
	<title>Funções Externas</title>
	<link rel="stylesheet" type="text/css" href="_css/estilos.css">
</head>
<body>
<div>
	<h3>Funções Externas</h3>
	<?php

		/*
		Comandos que chamam scripts externos

		Include: Se houver erro ele continua;
		Require: Se houver erro ele para;
		*/
		include "Funcoes 02 - Externa.php"; //Incluir
		echo "<h1>Testando novas funções </h1>";
		ola();
		echo mostraValor(4);
		echo "<h2>Finalizando programa...</h2>"
	?>
</div>
</body>
</html>