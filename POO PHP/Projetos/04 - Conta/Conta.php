<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Conta Bancária</title>
	<link rel="stylesheet" type="text/css" href="\_css/estilos.css">
</head>
<body>
<div>
	<h3>Conta Bancária</h3>
	<pre>
	<?php
		require_once 'Contafunc.php';
		$opcao = isset($_POST["conta"]);
		$acao = isset($_POST["acao"]);
		echo "Opção $opcao<br/>Acao $acao<br/>";
		$c1 = new Conta;
			if($opcao==1){
				$tipo = $_POST["conta"];
				$dono = $_POST["dono"];
				$c1->setTipo($tipo);
				$c1->getDono();
				$c1->setDono($dono);
				$c1->getTipo();
				print_r($c1);	
			}
			// AQUIIII CONSERTAR
			if($acao==1){
					print_r($co1);
				}
			echo "<a class='botao' href='index.html'>Home</a>";
	?>
</pre>
</div>
</body>
</html>
