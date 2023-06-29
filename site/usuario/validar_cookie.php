<?php
	include_once ("../dao/manipula_dados.php");

	$manipula = new manipula_dados();

	//verifica se a variável foi iniciada
	if (IsSet($_COOKIE["nome_usuario"]))
	 $nome_usuario = $_COOKIE["nome_usuario"];
	 
	if (IsSet($_COOKIE["senha_usuario"]))
	 $senha_usuario = $_COOKIE["senha_usuario"];

	if (!(empty($nome_usuario) or empty($senha_usuario)))
	{
		$manipula->set_table('usuario');
		$linhas = $manipula->validar_login($nome_usuario, $senha_usuario);

		if($linhas == 0)
		{
			setcookie("nome_usuario");
			setcookie("senha_usuario");
			header("location: login_admin.php");
			exit;		
		}		
	 }
	 else
	 {
		header("location: login_admin.php");
		exit;	 
	 }

?>