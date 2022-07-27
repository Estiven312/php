<?php
if ($_POST) {
    echo "Datos capturados correctamente";
    $usuario = $_REQUEST["txtUsuario"];
    $password = $_REQUEST["txtPassword"];

    if ($usuario == "" && $password == "") {
        # code...
        header("Location:index.php");
    } else {
        $mensaje= "Usuario o contraseña incorrecta";
    }
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>

    <header>

    </header>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registro</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php if (isset($mensaje)) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $mensaje ?>
                    </div>


                <?php endif; ?>

                <form method="POST" action="">

                    <div class="pb-3">
                        <label for="txtUsuario">Usuario</label>
                        <input type="text" id="textUsuario" name="txtUsuario" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="txtPassword" name="txtPassword">Password</label>
                        <input type="password" name="txtPassword" id="txtPassword" class="form-control">
                    </div>
                    <div class="pb-3">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>

                </form>
            </div>
        </div>


    </main>
    <footer>

    </footer>

</body>

</html>