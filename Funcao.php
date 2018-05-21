<!DOCTYPE html>
<html lang="pt-br">
<head>
		
	<meta charset="UTF-8"/>
	<title>Função</title>
	<link rel="stylesheet" type="text/css" href="_css/estilos.css">
</head>
<body>
<div>
	<h3>Função</h3>
	<?php
		echo "<h4>Não retorna valor</h4>";
		function soma ($a, $b){
			$s = $a + $b;
			echo "<p>A soma vale $s</p>";
		}
		soma(3,4);
		soma(8,2);
		$x = 9;
		$y = 15;
		soma($x, $y);

		echo "<h4>Retorna valor</h4>";
		function soma2 ($a, $b){
			$s = $a + $b;
			return $s;

			/*
				OU return $a+$b;
			*/
		}
		$x = 3;
		$y = 4;
		$r = soma2($x, $y);
		echo "A soma entre $x e $y é igual a $r";

		echo "<h4>Passgem por Referência</h4>";
		function incremento (&$x){
			$x += 2;
			echo "O valor de X é $x";
		}
		$a = 3;
		incremento ($a);
		echo "</p>O valor de A é $a";
	?>
</div>
</body>
</html>