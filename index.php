<?php

require_once 'sessao.php';
session_start();

?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Bem-Vindo</title>
		<link rel="stylesheet" type="text/css" href="./css/index.css">
	</head>
	<body>
		<div class="header">
			<div class="header-content">
				<div class="header-content-logo">
					<img src="./img/netflix-logo.png">
				</div>
				<div class="header-content-text"> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
			</div>
			<div class="header-nav">
				<a href="login.html"><h1 class="header-nav-li">Login</h1></a>
				<a href="cadastrar.html"><h1 class="header-nav-li">Cadastro</h1></a>
			</div>
		</div>
	</body>
</html>

