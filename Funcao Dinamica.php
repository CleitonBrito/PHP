<!DOCTYPE html>
<html lang="pt-br">
<head>
		
	<meta charset="UTF-8"/>
	<title>Função Dinâmica</title>
	<link rel="stylesheet" type="text/css" href="_css/estilos.css">
</head>
<body>
<div>
	<h3>Função Dinâmica</h3>
	<?php
		function soma ()	{
			$p = func_get_args(); //Pega os valores e colocar no vetor "p"
			$t = func_num_args(); //Total de valores;
			$s = 0;
			for($i=0; $i<$t;$i++){
				$s += $p[$i];
			}
			return $s;
		}

		$r = soma (3,5,2,8,10,8);
		echo "A soma dos valores é $r";
	?>
</div>
</body>
</html>