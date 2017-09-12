<?php 

function sessao_iniciar(){
	session_start();
}

function sessao_logar_usuario($usuario){
	$_SESSION['usuario'] = $usuario;
}

function sessao_deslogar_usuario(){
	unset($_SESSION['usuario']);
}

function sessao_obter_usuario_logado(){
	if(isset($_SESSION['usuario']))
		return $_SESSION['usuario'];
	
	else 
		return false;
}

?> 