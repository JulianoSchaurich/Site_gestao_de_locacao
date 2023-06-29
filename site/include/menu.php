<div class="container-fluid w-100">
    <div class="">
        <form method="post" action="log_out.php" >
            <button type="submit" class="btn btn-dark">
                <p class="m-0 p-0 fs-5">
                    LOG OUT   
                </p>
            </button>
        </form>
    </div>
    <a class="navbar-brand" href="?secao=home">LAB-CONTROL</a>
    <a class="navbar-brand" href="?secao=objetos_alugados"><?=$_COOKIE["nome_usuario"];?></a>
</div>