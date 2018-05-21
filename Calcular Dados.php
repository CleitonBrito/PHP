<!DOCTYPE html>
<html lang="pt-br">
<head>
		
	<meta charset="UTF-8"/>
	<title>Calcular</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div>
	<h3>Calcular</h3>
	<?php
		$n = isset($_GET["num"])?$_GET["num"]:0;
		$o = isset($_GET["oper"])?$_GET["oper"]:1;
		switch ($o){
			case 1:
				$r = $n * 2;
				break;
			case 2:
				$r = $n*$n*$n;
				break;
			case 3:
				$r = sqrt($n); // Raiz: ou $n ^ 0.5
		}
		echo "O resultado da operação solicitada foi <span class='foco'>".number_format($r,1)."</span>";
	?>
	<a href="Calcular.html" class="botao">Voltar</a>
</div>
</body>
</html>