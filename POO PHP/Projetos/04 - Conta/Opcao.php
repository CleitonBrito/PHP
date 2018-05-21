<?php
	
	$op = isset($_GET["oper"])?$_GET["oper"]:NULL;
	if ($op!=NULL){
			if($op==1){
				require_once "CriarConta.html";
			}
			else if($op==2)
				require_once "Gerenciar.html";
	}
	//Gerenciar Conta
	$acao = isset($_POST["acao"]);
	echo $acao;
	if($acao!=NULL){
	require_once 'Contafunc.php';
		if($acao==1){
			echo "NADA";
			require_once 'Conta.php';
		}
	}

?>
