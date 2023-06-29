<?php
include_once("../models/objeto.php");

$id = $_POST['id'];
$objeto = new objeto();
$objeto->set_id($id);
?>

<div class="mt-5 container-fluid w-75">
    <a class="navbar-brand" href="?secao=objetos">
        <h4 class="" >Objetos</h4>
    </a>
</div>

<div class="mt-5 container-fluid w-75">
    <div class="mt-5  w-25 ">
        <form method="post" action="../dao/manipula_objeto.php">
            <input type="hidden" id="id" name="id" value="<?=$objeto->get_id();?>">

            <label for="" class="form-label"><h5>Nome</h5> </label>
            <p><input type="text" name="txt_nome" value="<?=$objeto->get_nome()?>" class="form-control"></p>

            <label for="" class="form-label"><h5>Quantidade</h5> </label>
            <p><input type="number" name="quantidade" value="<?=$objeto->get_quantidade()?>" min="0" class="form-control"></p>

            <label for="" class="form-label"><h5>Link Imagem</h5> </label>
            <p><input type="text" name="txt_link" value="<?=$objeto->get_link_imagem()?>" class="form-control"></p>

            <button type="submit" name="opcao" value="update" class="btn btn-dark">
                <p class="m-0 p-0 fs-5">
                    Modificar   
                </p>
            </button>
        </form>
    </div>
</div>

