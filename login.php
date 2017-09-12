<?php 

require_once 'sessao.php';


$us [];
$us ["nome"]='root';
$us ["sobrenome"]='root';
$us ["sexo"]='feminino';
$us ["email"]='root@root.com';
$us ["apelido"]= 'root';
$us ["senha"]='root';


if ($_SERVER['REQUEST_METHOD']=='POST'){
	if(senha==us["senha"] && user==us["apelido"])
	{
		sessao_logar_usuario();
		return true;
	}
	
	else {
		header('location:erro.php');
		return false;
	}
}	
	
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8"/>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="./css/login.css">
	</head>
	<body>
		<div class="login">
			<div class="bemvindo">
				<h1>LOGIN</h1>
			</div>
			<form method="POST" action="#">
				<label>Usuário</label>
				<input type="text" name="user"/>
				<label>Senha</label>
				<input type="password" name="senha"/>
				<input id="enviar" type="submit" value="ENVIAR">
			</form>
		</div>
	</body>
</html>

