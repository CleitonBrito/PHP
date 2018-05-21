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
		$p1 = new Conta();//Carlos
		$p2 = new Conta();//Ana

		$p1->abrirConta("cc");
		$p1->setNumConta(1111);
		$p1->setDono("Carlos");
		$p2->abrirConta("cp");
		$p2->setNumConta(2222);
		$p2->setDono("Ana");

		$p1->depositar(300);
		$p2->depositar(500);

		$p2->sacar(1000);

		$p1->pagarMensal();
		$p2->pagarMensal();

		$p1->sacar(338);
		$p2->sacar(630);

		$p1->fecharConta();
		$p2->fecharConta();

		print_r($p1);
		print_r($p2);
	?>
</pre>
</div>
</body>
</html>