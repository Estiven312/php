<?php
if ($_POST) {
   $nombre=$_POST["txtNombre"];
    $cc = $_POST["txtIdentificacion"];
    $telefono = $_POST["txtTelefono"];
    $edad = $_POST["numEdad"];
    

  
    
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</head>

<body>
    <header>

    </header>
    <main>

        <div class="container">


            <div class="row">
                <div class="col-12">
                    <h1>Tabla de datos personales</h1>
                </div>


                <div class="col-12">



                    <table class="table table-hover  border  brown">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Numero identificación</th>
                                <th>Telefono</th>
                                <th>Edad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td> <?php echo $nombre ?> </td>
                                <td> <?php echo $cc ?> </td>
                                <td><?php echo $telefono ?></td>
                                <td><?php echo $edad?></td>
                            </tr>


                        </tbody>




                    </table>




                </div>
            </div>
        </div>


    </main>
    <footer>

    </footer>

</body>

</html>