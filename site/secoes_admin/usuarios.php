<?php
    include_once("../controller/ver_url.php");
    include_once("../dao/manipula_dados.php");

    $busca = new manipula_dados();
    $busca->set_table("usuario");
    $objetos = $busca->get_all_data_table();
?>

<div class="mt-5 container-fluid w-75 d-flex">
    <h4 class="" >Usuários</h4>
    <a class="navbar-brand" href="?secao=criar_usuario">
        <img src="..\images\plus-lg.svg" alt="pluss">
    </a>
</div>

<div class="table-responsive container-fluid w-100">
    <table class="table align-middle" style="text-align: center;">
        <thead>
            <tr class="table-dark" >
                <th>Nome</th>
                <th>Status</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($objetos as $objeto){ 
?> 
                <tr>
                    <td><?=$objeto['nome'];?></td>
                    <td><?=$objeto['status'];?></td>

                    <td class="d-flex justify-content-center" >
                        <form method="post" action="?secao=atualizar_usuario">
                            <input type="hidden" id="id" name="id" value="<?=$objeto['id'];?>">
                            <input type="hidden" id="txt_nome" name="txt_nome" value="<?=$objeto['nome'];?>">
                            <input type="hidden" id="txt_senha" name="txt_senha" value="<?=$objeto['senha'];?>">
                            
                            <button type="submit" name="opcao" value="update" class="btn btn-sm">
                                <img src="..\images\pencil-fill.svg" alt="pencil">
                            </button>
                        </form>
                        
                        <form method="post" action="../dao/manipula_usuario.php">
                            <input type="hidden" id="id" name="id" value="<?=$objeto['id'];?>">
                            <button type="submit" name="opcao" value="delete" class="btn btn-sm">
                                <img src="..\images\trash-fill.svg" alt="trash">
                            </button>
                        </form>
                    </td>
                </tr>
<?php
            }
?>

        </tbody>
    </table>
</div>