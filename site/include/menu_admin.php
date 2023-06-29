<div class="container-fluid w-100">
    <div class="d-flex justify-content-end">
        <form method="post" action="log_out.php" >
            <button type="submit" class="btn btn-dark">
                <p class="m-0 p-0 fs-5">
                    LOG OUT   
                </p>
            </button>
        </form>
    </div>
    <a class="navbar-brand" href="?secao=admin_home">LAB-CONTROL</a>
    <a class="navbar-brand" href="pdf_log_bd.php"><?=$_COOKIE["nome_admin"];?></a>
</div>
