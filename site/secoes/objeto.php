<?php
    include_once("../models/objeto.php");
    $id_objeto = $_POST['id'];
    $objeto = new objeto();
    $objeto->set_id($id_objeto);
    $nome_objeto = $objeto->get_nome();
    $quantidade_objeto = $objeto->get_quantidade();
    $link_imagem_objeto = $objeto->get_link_imagem();
    
?>

<div class="mt-5 container-fluid w-75">
    <h4 class=""><?=$nome_objeto ?></h4>
</div>

<div class="mt-3 container-fluid w-75">
    <div class="w-25 bg-light card text-light  m-0 p-0" >
        <img style="height: 300px;" src="<?php echo $link_imagem_objeto; ?>" class="card-img" alt="..." style="">
    </div>
</div>

<div class="mt-5 mb-5 container-fluid w-75">
    <div class="mt-5 w-25">
        <form method="post" action="../dao/criar_registro.php">
            <input type="hidden" id="id_objeto" name="id_objeto" value="<?=$id_objeto;?>">
            <input type="hidden" id="nome_usuario" name="nome_usuario" value="<?=$_COOKIE["nome_usuario"];?>">
            <input type="hidden"  name="data_atual" value="<?php echo date("Y-m-d"); ?>">

            <label for="" class="form-label"><h5>Quantidade</h5> </label>
            <p><input type="number" name="quantidade_solicitada" id="quantidade_solicitada" value="<?=$quantidade_objeto?>" min="0" max="<?=$quantidade_objeto?>" class="form-control"></p>
            <button type="submit" name="opcao" value="atualizar" class="btn btn-dark">
                <p class="m-0 p-0 fs-5">
                    Solicitar   
                </p>
            </button>
        </form>
    </div>
</div>
