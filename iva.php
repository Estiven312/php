<?php
$iva=21;
$sinIva=0;
$conIva=0;
$ivaCantidad=0;

if ($_POST) {
    $iva=$_POST["lstIva"];

    $sinIva=($_POST["textPrecioSin"])>0? $_POST["textPrecioSin"]:0;
    
    $conIva=($_POST["textPrecioCon"])>0? $_POST["textPrecioCon"]:0;

    print_r($_POST);
    if ($sinIva>0){
        $conIva=$sinIva*($iva/100+1);
    }

    if ($conIva>0) {
        $sinIva=$conIva*($iva/100+1);
        # code...
    }
    
    $ivaCantidad=$conIva-$sinIva;

}




?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ValidacionIva</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-12 text-center pb-5">
                <h1>Calculadora de Iva</h1>
            </div>

            <div class="col-6">
                <form  method="POST">
                    <div class="pb-3">

                        <label for="">Iva</label>
                        <select name="lstIva" id="lstIva"  class="form-control">


                            <option value="10.5">10.5</option>
                            <option value="19">19</option>
                            <option value="21" selected>21</option>
                            <option value="27">27</option>
                        </select>

                    </div>
                    <div class="pb-3">

                        <label for="">Precio sin Iva</label>
                        <input type="text" name="textPrecioSin" id="numPrecioSin" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="">Precio con Iva</label>
                        <input type="text" name="textPrecioCon" id="numPrecioCon" class="form-control">

                    </div>
                    <div class="pb-5">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>




                </form>


            </div>

            <div class="col-6 pb-3">

                <table class="table table-hover border">
                    <thead>
                   <tr>
                    <th>IVA:</th>
                    <td><?php  echo $iva."%" ?></td>
                   </tr>
                   <tr>
                    <th>PRECIO SIN IVA:</th>
                    <td><?php  echo $sinIva?></td>
                   </tr>
                   <tr>
                    <th>PRECIO CON IVA</th>
                    <td><?php  echo$conIva?></td>
                   </tr>
                   <tr>
                    <th>Iva cantidad</th>
                    <td><?php  echo $ivaCantidad  ?></td>
                   </tr>
                   
                   
                </table>
            </div>
        </div>
    </div>

</body>

</html>