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
		<form method="get" action="Conta.php">
			<fieldset><legend>Criar Conta</legend>
				Tipo: <select name="conta" id="iconta">
					<option value="cp">Conta Poupança</option>
					<option value="cc">Conta Corrente</option>
				</select><br/>
				Titular: <input type="text" name="dono"/>
				
				<input class="botao" type="submit" value="Criar"/>
			</fieldset>
		</form>
</div>
</body>
</html>