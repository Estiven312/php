


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vienvenida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="pb-3"> Formulario de datos Personales </h1>
               
            </div>
        </div>

        <div class="row">

        <div class="col-12">
            <form action="resultado.php" method="post">
            <div class="pb-3">
                <label for="txtNombre"  >Nombre*</label>
                <input type="text" name="txtNombre" id="txtNombre" class="form-control">
            </div>
            <div class="pb-3">
                <label for="numDni">Número de identificación*</label>
                <input type="text" name="txtIdentificacion" id="txtIdentificacion" class="form-control">
            </div>
            <div class="pb-3">

            <label for="numTelefono">Telefono</label>
            <input type="text" name="txtTelefono" id="TxtTelefono" class="form-control">
            </div>
            <div class="pb-3">
                <label for="numEdad">Edad*</label>
                <input type="number" name="numEdad" id="numEdad" class="form-control">
            </div>
            




            <div class="offset-11">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
            </form>


        </div>
        </div>
    </main>

</body>

</html>