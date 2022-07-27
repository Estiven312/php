<?php

session_start();
if (isset($_SESSION["listadoClientes"])) {
    $aClientes = $_SESSION["listadoClientes"];
    # code...
} else {
    $aClientes = array();
}

//$_SESSION["listadoClientes"]="";
//$aClientes= array();

if ($_POST) {
    if (isset($_POST["btnEnviar"])) {



        $nombre = $_POST["textNombre"];
        $dni = $_POST["txtDni"];
        $telefono = $_POST["textNumero"];
        $edad = $_POST["numEdad"];


        $aClientes[] = array(
            "nombre" => $nombre,
            "dni" => $dni,
            "telefono" => $telefono,
            "edad" => $edad
        );
        $_SESSION["listadoClientes"] = $aClientes;
    }

    if (isset($_POST["btnEliminar"])) {
        session_destroy();
        $aClientes = array();
    }
}
if (isset($_GET["pos"])) {

    $pos=$_GET["pos"];
    unset($aClientes[$pos]);
    $_SESSION["listadoClientes"]=$aClientes;
    header("Location: listado_clientes.php");
  
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <main class="container">


        <div class="row">
            <div class="col-12 text-center pb-5">

                <h1>Listado clientes </h1>
            </div>
            <div class="col-4">
                <form action="" method="POST">
                    <div>
                        <label for="txtNombre">NOmbre:</label>
                        <input type="text" name="textNombre" id="textNombre" class="form-control">
                    </div>
                    <div>
                        <label for="textDni">DNI</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control">


                    </div>
                    <div>
                        <label for="textTelefono">Telefono</label>
                        <input type="text" name="textNumero" id="textNumero" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="numEdad">Edad</label>
                        <input type="number" name="numEdad" id="numEdad" class="form-control">
                    </div>


                    <button type="submit " class="btn bg-primary" name="btnEnviar" id="btnEnviar" for="btnEnviar">Enviar</button>


                    <button type="submit" class=" btn bg-secondary" name="btnEliminar" id="btnEliminar" for="btnEnviar">Eliminar</button>






                </form>


            </div>
            <div class="col-8">

                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Telefono</th>
                            <th>Edad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aClientes as $pos => $cliente) : ?>
                            <tr>
                                <td> <?php echo $cliente["nombre"]  ?> </td>
                                <td> <?php echo $cliente["dni"]  ?> </td>
                                <td> <?php echo $cliente["telefono"]  ?> </td>
                                <td> <?php echo $cliente["edad"]  ?> </td>
                                <td>

                                    <a href="listado_clientes.php?pos=<?php echo $pos?>"> <i class="bi bi-trash"></i></a>
                                    
                                </td>

                            </tr>

                        <?php endforeach ?>
                    </tbody>

                </table>
            </div>
        </div>
    </main>


</body>

</html>l