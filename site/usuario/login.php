<?php
    session_start();
    include_once("../dao/manipula_dados.php");
    
    $manipula = new manipula_dados();
    
    $login = $_POST['txt_nome'];
    $password = $_POST['txt_senha'];
    $manipula->set_table("usuario");

    $linhas = $manipula->validar_login($login, $password);

    if($linhas == 0){
        echo '<script>alert("Usuário ou Senha do Adm não cadastrado ou incorreto");</script>';
        echo '<script>location = "login_admin.php"</script>';
    }else{
        $_SESSION["usuario"] = $login;
        setcookie("nome_usuario", $login);
        setcookie("senha_usuario", $password);

        header("location: index.php?secao=home");
    }
?>