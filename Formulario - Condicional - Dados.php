<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Formulário - Condicional - Dados</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div>
	<h3>Formulário - Condicional - Dados</h3>
	<?php
		$nome = isset($_GET["nome"])?$_GET["nome"]:"[Não Informado]";
		$ano = isset($_GET["ano"])?$_GET["ano"]:date("Y");
		$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Não Informado]";
		$idade = date("Y") - $ano;
		echo "$nome é $sexo e tem $idade anos.";
	?>
	<a href="Formulario - Condicional.html">Voltar</a>
</div>
</body>
</html>