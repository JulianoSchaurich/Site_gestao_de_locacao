<?php
session_start();
include_once("../models/objeto.php");
include_once("../models/usuario_objeto.php");

$nome_usuario = $_POST["nome_usuario"];
$id_objeto = $_POST['id_objeto'];
$quantidade_solicitada = $_POST['quantidade_solicitada'];
$data = $_POST['data_atual'];

$objeto = new objeto();
$objeto->set_id($id_objeto);
$quantidade_objeto = $objeto->get_quantidade();
$objeto->update_quantidade($quantidade_objeto - $quantidade_solicitada);

$usuario_objeto = new usuario_objeto();
$usuario_objeto->set_id_objeto($id_objeto);
$usuario_objeto->set_nome_usuario($nome_usuario);
$usuario_objeto->set_quantidade_objeto($quantidade_solicitada);
$usuario_objeto->set_data($data);
$usuario_objeto->insert_bd();

header("location: ../usuario/index.php?secao=home");
?>