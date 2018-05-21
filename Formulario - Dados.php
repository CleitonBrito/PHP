<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Formulário - Dados</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div>
	<h3>Formulário - Dados</h3>
	<?php
		$valor = $_GET["v"]; //
		$rq = sqrt($valor);
		echo "A raiz de $valor é igual a ".number_format($rq,2);
	?>
	<a href="Formularios.html">Voltar</a>
</div>
</body>
</html>