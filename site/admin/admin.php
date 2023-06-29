<?php
    session_start();
    include_once("validar_cookie.php");
    include_once("../controller/ver_url_admin.php");
    include_once("../dao/manipula_dados.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE - INICIO</title>
    <link rel="stylesheet" href="..\css\bootstrap.css">
</head>
<body class="text-bg-light">
    <nav class="w-100 navbar navbar-dark navbar-expand-lg bg-dark border-bottom border-dark-subtle">
        <?php
            include("../include/menu_admin.php");
        ?>
    </nav>
    
    <section>
        <?php
            $red = new ver_url_admin();
            $red->trocar_url_admin(@$_GET['secao']);
        ?>
        
    </section>
    
<script src = "..\js\bootstrap.js"></script>
</body>
</html>