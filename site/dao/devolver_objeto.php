<?php
session_start();
include_once("../models/objeto.php");
include_once("../models/usuario_objeto.php");

$nome_usuario = $_POST["nome_usuario"];
$id_objeto = $_POST['id_objeto'];
$id_usuario_objeto = $_POST['id_usuario_objeto'];
$quantidade_devolvida = $_POST['quantidade_devolvida'];

$objeto = new objeto();
$objeto->set_id($id_objeto);
$quantidade_objeto = $objeto->get_quantidade();
$objeto->update_quantidade($quantidade_objeto + $quantidade_devolvida);

$usuario_objeto = new usuario_objeto();
$usuario_objeto->set_id($id_usuario_objeto);
$quantidade_usuario_objeto = $usuario_objeto->get_quantidade_objeto();
$usuario_objeto->update_quantidade_objeto($quantidade_usuario_objeto - $quantidade_devolvida);

header("location: ../usuario/index.php?secao=objetos_alugados");
?>