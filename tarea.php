<?php

$aEmpleados = array();
$aEmpleados[] = array("dni" => 33300123, "nombre" => "davib garcía", "sueldo" => 70550, 25);
$aEmpleados[] = array("dni" => 40874456, "nombre" => "ana del valle", "sueldo" => 74700, 00);
$aEmpleados[] = array("dni" => 67567565, "nombre" => "andrés perz", "sueldo" => 83000, 00);
$aEmpleados[] = array("dni" => 75744545, "nombre" => "victoia luz", "sueldo" => 58100, 00);


                           

print_r($aEmpleados)











?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>
    <header>


    </header>

    <main class="container">

        <div class="row">
            <div class="col-12 text-center">

                <h1>Listado de Empleados </h1>
            </div>


            <div class="col-12">

                <table class="table table:hover border">

                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>NOMBRE</th>
                            <th>SUELDO</th>

                        </tr>


                    </thead>
                    <tbody>
                        <?php
                        $contador = 0;
                        $sueldo_total=0;


                        foreach ($aEmpleados as $empleados) { ?>

                           <?php $nombre = strtoupper($empleados["nombre"]);
                                $sueldo=number_format($empleados["sueldo"],2,",",".")
                           
                           
                           ?>

                            <tr>
                                <td><?php echo $empleados["dni"] ?></td>
                                <td><?php echo $nombre ?></td>
                                <td><?php echo $sueldo ?></td>

                            </tr>

                           

                        <?php 
                        $sueldo_total+=$empleados["sueldo"];
                        
                        
                        $contador++; }   ?>



                    </tbody>
                    <tfoot>
                        <tr>
                            <td><?php echo "Son " . $contador . " trabajadores" ?></td>
                        </tr>
                        <tr>
                            <td><?php
                            $formato=number_format($sueldo_total,2,",",".");
                            
                            echo"El valor total de la nomina es: ". $formato ?></td>
                        </tr>
                    </tfoot>
                </table>




            </div>
        </div>




    </main>
    <footer>

    </footer>



</body>

</html>