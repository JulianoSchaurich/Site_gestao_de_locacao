<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE - INICIO</title>
    <link rel="stylesheet" href="..\css\bootstrap.css">
</head>
<body class="text-bg-light">
    <div class="d-flex flex-column justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
        <div class="card  mb-3 text-bg-secondary" style="max-width: 18rem;">
            <div class="card-header mx-auto">
                <h1>Login</h1>
            </div>
            <div class="card-body text-bg-dark">

                <form method="post" action="login.php">
                    <label for="" class="form-label"><h5>Nome</h5> </label>
                    <p><input type="text" name="txt_nome" class="form-control"></p>

                    <label for="" class="form-label"><h5>Senha</h5> </label>
                    <p><input type="password" name="txt_senha" class="form-control"></p>

                    <button type="submit" class="btn btn-primary d-grid gap-2 col-6 mx-auto">
                        <p class="m-0 p-0 fs-5">
                            Entrar   
                        </p>
                    </button>
                </form>

            </div>
        </div>
    </div>

    <script src = "..\js\bootstrap.js"></script>
</body>
</html>