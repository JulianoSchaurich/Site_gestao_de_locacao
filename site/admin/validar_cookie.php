<?php
	include_once ("../dao/manipula_dados.php");
	$manipula = new manipula_dados();

	//verifica se a variável foi iniciada
	if (IsSet($_COOKIE["nome_admin"]))
	 $nome_admin = $_COOKIE["nome_admin"];
	 
	if (IsSet($_COOKIE["senha_admin"]))
	 $senha_admin = $_COOKIE["senha_admin"];

	if (!(empty($nome_admin) or empty($senha_admin)))
	{
		
		$manipula->set_table('admin');
		$linhas = $manipula->validar_login($nome_admin, $senha_admin);

                if($linhas == 0)
				{
					setcookie("nome_admin");
					setcookie("senha_admin");
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