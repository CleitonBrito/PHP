<!DOCTYPE html>
<html lang="pt-br">
<head>
		
	<meta charset="UTF-8"/>
	<title>Desafio da Média</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div>
	<h3>Desafio da Média</h3>
	<?php
		$nota1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
		$nota2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
		$situacao = isset($situacao)?$situacao:0;
		$media = ($nota1+$nota2)/2;

		if($media<5){
			$situacao = "REPROVADO";
		}elseif($media >= 5 && $media <7){
			$situacao = "RECUPERAÇÃO";
		}else{
			$situacao = "APROVADO";
		}
		
		echo "A média entre <span class='foco'>". number_format($nota1,1). "</span> e <span class='foco'>". number_format($nota2,1). "</span> é igual a <span class='foco'>". number_format($media,1). "</span><br/>Situação do aluno: <span class='foco'>$situacao</span>";
	?>
</div>
</body>
</html>