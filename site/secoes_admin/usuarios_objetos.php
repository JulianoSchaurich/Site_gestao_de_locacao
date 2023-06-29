<?php
    include_once("../controller/ver_url.php");
    include_once("../dao/manipula_dados.php");
    include_once("../models/objeto.php");

    $busca = new manipula_dados();
    $busca->set_table("usuario_objeto");
    $objetos = $busca->get_all_data_table();

    $obj = new objeto();
?>

<div class="mt-5 container-fluid w-75 d-flex">
    <h4 class="" >Usuários Objetos</h4>
</div>

<div class="table-responsive container-fluid w-100">
    <table class="table  align-middle" style="text-align: center;">
        <thead>
            <tr class="table-dark" >
                <th>Usuário</th>
                <th>Objeto</th>
                <th>Quantidade</th>
                <th>Data</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($objetos as $objeto){ 
                $obj->set_id($objeto['id_objeto']);
?>
                <form method="post" action="../dao/manipula_usuario_objeto.php">
                    <tr>
                        <input type="hidden" id="id" name="id" value="<?=$objeto['id'];?>">

                        <td><?=$objeto['nome_usuario'];?></td>
                        <td><?=$obj->get_nome();?></td>
                        <td><?=$objeto['quantidade_objeto'];?></td>
                        <td><?=$objeto['data_reserva'];?></td>

                        <td>
                            <button type="submit" name="opcao" value="delete" class="btn btn-sm">
                                <img src="..\images\trash-fill.svg" alt="trash">
                            </button>
                        </td>
                    </tr>
                </form>
<?php
            }
?>

        </tbody>
    </table>
</div>