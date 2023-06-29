<?php
   include_once("..\dao\manipula_dados.php");

   $busca = new manipula_dados();
   $busca->set_table("objeto");
   $objetos = $busca->get_all_data_table();
?>

<div  class="mt-3 container-fluid d-flex flex-column justify-content-center align-items-center"> 
    <h1 class="mt-5 mb-5 text-center" >Equipamento Disponível</h1>

    <div id="container" class="">    
<?php 
    foreach($objetos as $objeto){ 
        if($objeto['quantidade'] != 0){
?>
        <div class="mb-4 container-fluid d-flex flex-column justify-content-center align-self-center text-center">
            <form method="post" action="?secao=objeto">
                <input type="hidden" id="id" name="id" value="<?=$objeto['id'];?>">      
                
                <div class="bg-light card text-light  m-0 p-0" >
                    <img style="height: 180px;" src="<?php echo $objeto['link_imagem']; ?>" class="card-img" alt="..." style="">
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-success">
                        <?=$objeto['quantidade']?>
                    </span>
                </div>

                <button type="submit" name="opcao" value="deletar" class="btn btn-sm">
                    <p class="m-0 p-0 fs-5">
                        <?=$objeto['nome'];?> 
                    </p>
                </button>
            </form>          
        </div> 
<?php
        }
    }
?>
    </div>
</div>