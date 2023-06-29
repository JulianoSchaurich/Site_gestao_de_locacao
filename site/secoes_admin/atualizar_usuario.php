<?php
include_once("../models/usuario.php");

$id = $_POST['id'];
$usuario = new usuario();
$usuario->set_id($id);
?>

<div class="mt-5 container-fluid w-75">
    <a class="navbar-brand" href="?secao=usuarios">
        <h4 class="" >Usuários</h4>
    </a>
</div>

<div class="mt-5 container-fluid w-75">
    <div class="mt-5  w-25 ">
        <form method="post" action="../dao/manipula_usuario.php">
            <input type="hidden" id="id" name="id" value="<?=$usuario->get_id();?>">

            <label for="" class="form-label"><h5>Nome</h5> </label>
            <p><input type="text" name="txt_nome" value="<?=$usuario->get_nome()?>" class="form-control"></p>

            <label for="" class="form-label"><h5>Senha</h5> </label>
            <p><input type="text" name="txt_senha" value="<?=$usuario->get_senha()?>" min="0" class="form-control"></p>

            <button type="submit" name="opcao" value="update" class="btn btn-dark">
                <p class="m-0 p-0 fs-5">
                    Modificar   
                </p>
            </button>
        </form>
    </div>
</div>

