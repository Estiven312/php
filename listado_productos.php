<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart TV 55\"4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554kS20",
    "stock" => 60,
    "precio" => 58000,

);

$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blaco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30 Blaco ",
    "stock" => "0",
    "precio" => 22000,
);
$aProductos[] = array(
    "nombre" => "Aire Acondicionado Split Inventer/Calor Surrey 2900F ",
    "marca" => "Surrey",
    "modelo" => "55AIQ1201E",
    "stock" => 5,
    "precio" => 450000

);

print_r($aProductos)

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListadoProductos</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>
    <main>
        <div class="container">
            <div class="row">


                <div class="col-12 text-center pb-4">

                    <h1>Listado de Productos</h1>
                </div>
                <div class="col-12">

                    <table class="table table:hover border">

                        <thead>

                            <tr>
                                <th>Nombre</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Stock</th>
                                <th>Precio</th>
                                <th>Acci??n </th>




                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> <?php
                                        echo $aProductos[0]["nombre"]

                                        ?>

                                </td>

                                <td><?php
                                    echo $aProductos[0]["marca"]

                                    ?>

                                </td>
                                </td>
                                <td><?php
                                    echo $aProductos[0]["modelo"]


                                    ?>

                                </td>
                                </td>
                                <td><?php
                                    /*if ($aProductos[2]["stock"] > 0) {
                                        echo "Hay stock";
                                    } else {
                                        echo "No hay stock";
                                    }*/

                                    //Otra manera de preguntar y hacer la validaci??n:

                                    echo $aProductos[0]["stock"]<=10 && $aProductos[0]["stock"]>0?"Poco Stock":($aProductos[0]["stock"]==0? "Sin stock":"Hay stock");
                                    echo $aProductos[1]["stock"] <= 10 && $aProductos[1]["stock"] > 0 ? "Poco Stock" : ($aProductos[1]["stock"] == 0 ? "Sin stock" : "Hay stock");
                                    ?>

                                </td>
                                </td>
                                <td><?php
                                    echo $aProductos[0]["precio"]

                                    ?>

                                </td>
                                </td>
                                <td><button class="button bg-primary">Comprar</button></td>


                            </tr>
                            <tr>
                                <td> <?php
                                        echo $aProductos[1]["nombre"]

                                        ?>

                                </td>

                                <td><?php
                                    echo $aProductos[1]["marca"]

                                    ?>

                                </td>
                                </td>
                                <td><?php
                                    echo $aProductos[1]["modelo"]

                                    ?>

                                </td>
                                </td>
                                <td><?php





                                    if ($aProductos[2]["stock"] > 0) {
                                        echo "Hay stock";
                                    } else {
                                        echo "No hay stock";
                                    }

                                    echo $aProductos[2]["stock"] <= 10 && $aProductos[2]["stock"] > 0 ? "Poco Stock" : ($aProductos[2]["stock"] == 0 ? "Sin stock" : "Hay stock");


                                    ?>

                                </td>
                                </td>
                                <td><?php
                                    echo $aProductos[1]["precio"]

                                    ?>

                                </td>
                                </td>
                                <td><button class="button bg-primary">Comprar</button></td>


                            </tr>

                            <tr>
                                <td> <?php
                                        echo $aProductos[2]["nombre"]

                                        ?>

                                </td>

                                <td><?php
                                    echo $aProductos[2]["marca"]

                                    ?>

                                </td>
                                </td>
                                <td><?php
                                    echo $aProductos[2]["modelo"]

                                    ?>

                                </td>
                                </td>
                                <td><?php

                                    if ($aProductos[2]["stock"] > 0) {
                                        echo "Hay stock";
                                    } else {
                                        echo "No hay stock";
                                    }


                                    ?>

                                </td>
                                </td>
                                <td><?php echo $aProductos[2]["precio"] ?></td>
                                </td>
                                <td><button class="button bg-primary">Comprar</button></td>


                            </tr>
                        </tbody>



                    </table>





                </div>




            </div>
            <div class="col-12">


                <?php ?>
            </div>




        </div>
    </main>







</body>

</html>