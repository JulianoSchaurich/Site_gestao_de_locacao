<?php
    session_start();
    include_once("validar_cookie.php");
    include_once("../controller/ver_url.php");
    include_once("../dao/manipula_dados.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE - <?php echo $_GET['secao']; ?> </title>
    <link rel="stylesheet" href="..\css\style.css">
    <link rel="stylesheet" href="..\css\bootstrap.css">
</head>
<body class="text-bg-light">
    <header>
        <?php
          include("../include/topo.php");
        ?>
    </header>

    <nav class="w-100 navbar navbar-dark navbar-expand-lg bg-dark border-bottom border-dark-subtle"">
        <?php
          include("../include/menu.php");   
        ?>
    </nav>

    <section>
        <?php
            $red = new ver_url();
            $red->trocar_url(@$_GET['secao']);
        ?>
    </section>

    <div style="height: 80px;">
    </div>
    <footer class="text-bg-dark container-fluid d-flex justify-content-center align-items-center fixed-bottom" style="height: 80px;">
        <?php
            include("../include/rodape.php");
        ?>
    </footer>
<script src = "..\js\bootstrap.js"></script>
</body>
</html>