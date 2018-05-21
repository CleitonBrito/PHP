<!DOCTYPE html>
<html lang="pt-br">
<head>
		
	<meta charset="UTF-8"/>
	<title>Vetores</title>
	<link rel="stylesheet" type="text/css" href="_css/estilos.css">
</head>
<body>
<div>
	<h3>Vetores</h3>
	<pre>
	<?php
		$vetor = array(3,5,8,2);
		echo "<h4>Exibir</h4>";
		echo "<h5>Forma 1:</h5>";
		print_r($vetor); //Exibe
		echo "O vetor tem ".count($vetor). " elementos."; //Quantidade
		echo "</p>";
		//Ou assim:
		echo "<h5>Forma 2:</h5>";
		var_dump($vetor); //Exibe
		echo "</p>";
		//Ou assim:
		echo "<h5>Forma 3:</h5>";
		foreach ($vetor as $valor) { //Exibe
			echo "$valor ";
		}

		str_repeat("-", 10);

		echo "<h3>Incluir no Final</h3>";
		$vetor[] = 15;
		//ou assim:
		array_push($vetor, 9);
		print_r($vetor);
		echo "<h3>Remover no Final</h3>";
		array_pop($vetor);
		print_r($vetor);
		echo "<h3>Incluir no Inicio</h3>";
		array_unshift($vetor, 10);
		print_r($vetor);
		echo "<h3>Remover no Inicio</h3>";
		array_shift($vetor);
		print_r($vetor);
		echo "<h3>Ordenar</h3>";
		echo "<h6>Crescente</h6>";
		sort($vetor);
		print_r($vetor);
		echo "<h6>decrescente</h6>";
		rsort($vetor);
		print_r($vetor);
		echo "<h6>Ordenar sem mudar o índice - Crescente</h6>";
		asort($vetor);
		print_r($vetor);
		echo "<h6>Ordenar sem mudar o índice - decrescente</h6>";
		arsort($vetor);
		print_r($vetor);
	?>
	</pre>
</div>
</body>
</html>