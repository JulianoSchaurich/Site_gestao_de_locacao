<?php
    include_once("..\dao\manipula_dados.php");
    session_start();
    
    $manipula = new manipula_dados();
    
    $login = $_POST['txt_nome'];
    $password = $_POST['txt_senha'];
    $manipula->set_table("admin");

    $linhas = $manipula->validar_login($login, $password);

    if($linhas == 0){
        echo '<script>alert("Usuário ou Senha do Adm não cadastrado ou incorreto");</script>';
        echo '<script>location = "login_admin.php"</script>';
    }else{
        $_SESSION["admin"] = $login;
        setcookie("nome_admin", $login);
        setcookie("senha_admin", $password);

        header("location: admin.php?secao=admin_home");
    }
?>