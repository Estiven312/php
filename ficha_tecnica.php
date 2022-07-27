<?php
date_default_timezone_set("America/Bogota");


$nombre = "Estiven Carvajal Rojas";

$edad = 18;
$aPeliculas = array('Minios', 'minions2', 'minion3');

?>
<!-- Zona horaria de Bogota ^   -->



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha_tecnica</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">


        <div class="row">
            <div class="col-12 text-center">
                <h1>Ficha Personal</h1>





            </div>
        </div>

        <div class="col-12 text-center p-4">


            <table class="table table-hover border">


                <tr>

                    <th> Fecha:</th>
                    <td>
                        <?php
                        echo date("d/m/Y");

                        ?>
                    </td>
                </tr>
                <tr>

                    <th>Nombre y apellidos:</th>
                    <td><?php echo $nombre;  ?></td>
                </tr>

                <tr>
                    <th>EDAD:</th>
                    <td><?php echo $edad; ?></td>
                </tr>
                <tr>

                    <th>
                        Peliculas favoritas
                    </th>
                    <td>

                        <!--<//?php print_r($aPeliculas) ; ?>   Linea para mostrar toda la lista de elementos-->

                        <?php echo $aPeliculas[0]; ?>
                        <?php echo $aPeliculas[1]; ?>
                        <?php echo $aPeliculas[2]; ?>

                    </td>
                </tr>





            </table>
        </div>


        <div class="row">


            <div class="col-12">

            <?php
            $stock=800;



            if($stock>0)
                echo"Hay stock disponible";

            else
                echo "No hay stock";
            ?>





            </div>

            <div class="col-12">



            <?php 

            if($valor%2==0){
                echo"El número $valor es par";
            }else{
                echo"El número $valor es impar";
            }
            
            
            
            
            
            
            ?>
            </div>
        </div>
    </div>
    </div>








</body>

</html>