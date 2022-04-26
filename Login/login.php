<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Tela de Login</title>
	<link rel="stylesheet" type="text/css" href="Css/estilo.css">
</head>
<body>
<div id="corpo-form">
	<h1>Entrar</h1>
	<form method="POST" action="processa.php">
		<input type="email" placeholder="Usuário" maxlength="2">
		<input type="password" placeholder="Senha">		
		<input type="submit" value="ACESSAR">
		<center>Ainda não está cadastrado?</center><a href="cadastrar.php">Cadastre-se</a>
	</form>
</div>
</body>
</html>