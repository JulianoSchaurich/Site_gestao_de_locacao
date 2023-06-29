<?php
    include_once("..\dao\manipula_dados.php");
    include_once("..\models\objeto.php");

    $opcao = $_POST["opcao"];
    

    if ($opcao == 'update') {
        $id = $_POST["id"];
        $nome = $_POST["txt_nome"];
        $quantidade = $_POST["quantidade"];
        $link = $_POST["txt_link"];

        $manipula = new manipula_dados();
        $manipula->set_table("objeto");
        $manipula->update_objeto($id, $nome, $quantidade, $link);

        header("location: ../admin/admin.php?secao=objetos");
        exit();
    }
    else if ($opcao == 'delete'){
        $objeto = new objeto();
        $objeto->set_id($_POST["id"]);
        $objeto->update_quantidade("0");

        header("location: ../admin/admin.php?secao=objetos");
        exit();
    }
    else if($opcao == 'create'){
        //inserir
        $nome = $_POST["txt_nome"];
        $quantidade = $_POST["quantidade"];
        $link = $_POST["txt_link"];

        $manipula = new manipula_dados();
        $manipula->set_table("objeto");
        $manipula->set_fields("nome, quantidade, link_imagem, status");
        $manipula->set_dados("'$nome', '$quantidade', '$link', 1");
        $manipula->insert();

        header("location: ../admin/admin.php?secao=criar_objeto");
        exit();
    }
?>