<?php 
	require_once 'classes/usuarios.php';
	$u = new Usuário;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Tela de Login</title>
	<link rel="stylesheet" type="text/css" href="Css/estilo.css">
</head>
<body>
<div id="corpo-form-cad">
	<h1>Cadastrar</h1>
	<form method="POST">
		<input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
		<input type="text" name="telefone" placeholder="Telefone" maxlength="30">
		<input type="email" name="email" placeholder="Usuário" maxlength="40">
		<input type="password" name="senha" placeholder="Senha" maxlength="15">	
		<input type="password" name="confSenha" placeholder="Confirmar Senha" maxlength="15">	
		<input type="submit" value="ACESSAR">
	</form>
</div>

<?php 
	if (isset($_POST['nome']))
	{
		$nome = addcslashes($_POST['nome']);
		$telefone = addcslashes($_POST['telefone']);
		$email = addcslashes($_POST['email']);
		$senha = addcslashes($_POST['senha']);
		$confirmarSenha = addcslashes($_POST['confSenha']);
		//verificar se não esta vazio
		if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && empty($confSenha))

		{
			$u->conectar("pizzaria_do_matheus","localhost","root","");
			if ($u->msgErro=="")//esta tudo ok
			{
				if($senha==$confirmarSenha){
				if($u->cadastrar($nome,$telefone,$email,$senha))
				{
					echo "Cadastrado com sucesso! Acesse para entrar";
				}else{
					echo "Email já cadastrado";
				}
			}else{
				echo "As senhas não correspondem";
			}
			}else{
				echo "Erro: " . $u->msgErro;
			}
		}else
		{
			echo "Preencha todos os campos!";
		}
	}

?>
</body>
</html>