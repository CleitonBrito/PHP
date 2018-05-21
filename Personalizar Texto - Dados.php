<!DOCTYPE html>
<html lang="pt-br">
<head>
		<?php
			$txt = isset($_GET["texto"])?$_GET["texto"]:"Texto Genérico";
			$tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
			$cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
		?>
	<meta charset="UTF-8"/>
	<title>Personalizar Texto - Dados</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
		<style>
			span.texto {
				font-size: <?php echo $tam; ?>;
				color: <?php echo $cor; ?>;
			}
		</style>
</head>
<body>
<div>
	<h3>Personalizar Texto - Dados</h3>
	<?php
		echo "<span class ='texto'>$txt</span>";
	?>
	<a class="botao" href="Personalizar Texto.html">Voltar</a>
</div>
</body>
</html>