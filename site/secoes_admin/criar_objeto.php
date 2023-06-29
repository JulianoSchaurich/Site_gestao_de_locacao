<div class="mt-5 container-fluid w-75 d-flex">
    <a class="navbar-brand" href="?secao=objetos">
        <h4 class="" >Objeto</h4>
    </a>
</div>

<div class="mt-5 container-fluid w-50">
    <div class="mt-5  w-100 ">
        <form method="post" action="../dao/manipula_objeto.php">
            <label for="" class="form-label"><h5>Nome</h5> </label>
            <p><input type="text" name="txt_nome" class="form-control"></p>

            <label for="" class="form-label"><h5>Quantidade</h5> </label>
            <p><input type="number" name="quantidade" min="0" class="form-control"></p>

            <label for="" class="form-label"><h5>Link Imagem</h5> </label>
            <p><input type="text" name="txt_link" class="form-control"></p>

            <div class="d-flex justify-content-center" >
                <button type="submit" name="opcao" value="create" class="btn btn-dark">
                    <p class="m-0 p-0 fs-5">
                        Cadastrar
                    </p>
                </button>
            </div>
        </form>
    </div>
</div>