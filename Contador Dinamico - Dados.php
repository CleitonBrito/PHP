<!DOCTYPE html>
<html lang="pt-br">
<head>
		
	<meta charset="UTF-8"/>
	<title>Contador Dinâmico</title>
	<link rel="stylesheet" type="text/css" href="_css/estilos.css">
</head>
<body>
<div>
	<h3>Contador Dinâmico</h3>
	<?php
		$inicio = $_GET["inicio"];
		$fim = $_GET["fim"];
		$incremento = $_GET["incremento"];
		if ($inicio < $fim){
			while ($inicio <= $fim){
				echo "$inicio  ";
				//echo $incremento;
				$inicio+=$incremento;
			}
		}else
			while ($inicio >= $fim){
				echo "$inicio  ";
				//echo $incremento;
				$inicio-=$incremento;
			}
			

	
	?>
	<a href="Contador Dinamico.html" class="botao">Voltar</a>
</div>
</body>
</html>