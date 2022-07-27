<?php 
if ($_POST) {
    echo"Datos capturados correctamente";
    $usuario=$_POST["txtUsuario"];
    $password=$_POST["txtPassword"];

    if ($usuario=="admin" && $password=="1234567") {
        # code...
        header("Location:google.com");
    }else {
        echo"Usuario o contraseña incorrecta";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>
    <main class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h1>Formulario</h1>
            </div>

            <div class="col-5 offset-3">
                <?php  if () {
                    # code...
                }?>

                <form  method="POST">
                    <div class="pb-3">
                        <label for="lbNombre">Nombre:</label>
                        <input type="text"  name="txtUsuario" id="txtUsuario" class="form-control">

                    </div>
                    <div class="pb-3">

                        <label for="password">Contraseña:</label>
                        <input type="password" name="txtClave" id="txtClave" class="form-control">
                    </div>

                   <div class="pb-3">
                    <button type="submit" name="btnIngresar" class="btn bg-primary">Enviar </button>
                
                    </div>




                </form>
            </div>
        </div>


    </main>

</body>

</html>