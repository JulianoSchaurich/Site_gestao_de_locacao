<?php
    include_once("../controller/ver_url.php");
    include_once("../dao/manipula_dados.php");

    $busca = new manipula_dados();
    $busca->set_table("log_bd");
    $objetos = $busca->get_all_data_table();
?>

<div class="mt-5 container-fluid w-75 d-flex">
    <h4 class="" >Log Banco de Dados</h4>
</div>

<div class="container-fluid w-75">
    <table class="table align-middle" style="text-align: center;">
        <thead>
            <tr class="table-dark" >
                <th>Operação</th>
                <th>Tabela</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($objetos as $objeto){ 
?>
                <tr>
                    <td><?=$objeto['operacao'];?></td>
                    <td><?=$objeto['tabela'];?></td>
                    <td><?=$objeto['data'];?></td>
                </tr>
            <?php
                        }
            ?>
        </tbody>
    </table>
</div>