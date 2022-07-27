<?php
$aPacientes = array();
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.50

);
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre" => "GONZALO",
    "edad" => 45,
    "peso" => 81.50

);
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre" => "ESTIVEN",
    "edad" => 45,
    "peso" => 81.50

);
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre" => "DEIMER",
    "edad" => 45,
    "peso" => 81.50

);
function saludar($nombre, $apellidos){
    return "hola mi nombre es ".$nombre.$apellidos;
}
echo saludar("estiven","carvajal"); 

function area($base, $altura){
    return "el área es". $base*$altura ;

}
echo area(7,7)."<br>";

$sueldo=80000;

function pago($sueldo,$porcentaje ){
$variable=$sueldo-$sueldo*$porcentaje;
return $variable;


}
echo pago($sueldo,0.17)






?>





<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>

    <header></header>

    <main>

        <div class="container">
            <div class="row">
                <dic class="col-12">
                    <h1>Clinica</h1>


            </div>


            <div class="col-12">
                <table class="table table-hover boder">

                    <thead>
                        <th>DNI</th>
                        <th>Nombre y apellido</th>
                        <th>Edad</th>
                        <th>Peso</th>

                    </thead>
                    <tbody>
                        <?php echo $aPacientes[0]["dni"] ?>
                        <?php foreach ($aPacientes as $aPaciente ) { ?>
                            <tr>
                                <td><?php echo $aPaciente["dni"] ?></td>
                                <td><?php echo $aPaciente["nombre"] ?></td>
                                <td><?php echo $aPaciente["edad"] ?></td>
                                <td><?php echo $aPaciente["peso"] ?></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>



            </div>
        </div>




        </div>

    </main>

</body>

</html>