<?php
    include_once("..\dao\manipula_dados.php");
    include_once("../models/usuario.php");
    include_once("../models/usuario_objeto.php");
    include_once("../models/objeto.php");

    $opcao = $_POST["opcao"];

    if ($opcao == 'update') {

        $nome = $_POST["txt_nome"];
        $senha = $_POST["txt_senha"];
        $id = $_POST["id"];

        $usuario = new usuario();
        $usuario->set_id($id);
        $nome_usuario = $usuario->get_nome();

        $manipula = new manipula_dados();
        $manipula->set_table("usuario");
        $manipula->update_usuario($id, $nome, $senha, $nome_usuario);
        
        header("location: ../admin/admin.php?secao=usuarios");
        exit();
    }
    else if ($opcao == 'delete') {
        $usuario = new usuario();
        $usuario->set_id($_POST["id"]);
        $usuario->update_status("0");
        $nome_usuario = $usuario->get_nome();

        $manipula = new manipula_dados();
        $elementos = $manipula->get_objetos_alugados($nome_usuario);
        foreach($elementos as $elemento){
            $usuario_objeto = new usuario_objeto();
            $usuario_objeto->set_id($elemento["id"]);

            $id_objeto = $elemento["id_objeto"];
            $quantidade_devolvida = $usuario_objeto->get_quantidade_objeto();
    
            $usuario_objeto->update_quantidade_objeto("0");
            
            $objeto = new objeto();
            $objeto->set_id($id_objeto);
            $quantidade = $objeto->get_quantidade();
            $objeto->update_quantidade($quantidade + $quantidade_devolvida);
        }
        header("location: ../admin/admin.php?secao=usuarios");
        exit();
    }
    else if($opcao == 'create'){
        //inserir
        $nome = $_POST["txt_nome"];
        $senha = $_POST["password"];

        $manipula = new manipula_dados();
        $manipula->set_table("usuario");
        $manipula->set_fields("nome, senha, status");
        $manipula->set_dados("'$nome', '$senha', 1");

        $linhas = $manipula->validar_usuario($nome);
        if($linhas == 0)
        {
            $manipula->insert();
        }

        header("location: ../admin/admin.php?secao=criar_usuario");
        exit();
    }
?>