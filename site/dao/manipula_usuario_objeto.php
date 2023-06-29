<?php
    include_once("..\dao\manipula_dados.php");
    include_once("../models/usuario_objeto.php");
    include_once("../models/objeto.php");

    $opcao = $_POST["opcao"];

    if ($opcao == 'atualizar') {
    }
    else if ($opcao == 'delete'){
        $usuario_objeto = new usuario_objeto();
        $usuario_objeto->set_id($_POST["id"]);

        $id_objeto = $usuario_objeto->get_id_objeto();
        $quantidade_devolvida = $usuario_objeto->get_quantidade_objeto();

        $usuario_objeto->update_quantidade_objeto("0");
        
        $objeto = new objeto();
        $objeto->set_id($id_objeto);
        $quantidade = $objeto->get_quantidade();
        $objeto->update_quantidade($quantidade + $quantidade_devolvida);

        header("location: ../admin/admin.php?secao=usuarios_objetos");
        exit();
    }
?>