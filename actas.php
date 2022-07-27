<?php
$aAlumnos = array();
$aAlumnos[] = array(
    'alumno' => "Ana Valle",
    'nota1' => 7,
    'nota2' => 8

);
$aAlumnos[] = array(
    'alumno' => "Bernabe Paz",
    'nota1' => 5,
    'nota2' => 7

);
$aAlumnos[] = array(
    'alumno' => "Sebastian Aguirre",
    'nota1' => 6,
    'nota2' => 9

);
$aAlumnos[] = array(
    'alumno' => "Monica Ledesma",
    'nota1' => 8,
    'nota2' => 9

);







?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Actas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>
    <main class="container">
        <div class="row">

            <div class="col-12">
                <table class="table table-hover border">

                    <thead>
                        <tr>
                            <th>Alumno</th>
                            <th>Nota1</th>
                            <th>Nota2</th>
                            <th>Promedio</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sumarpro = 0;
                        foreach ($aAlumnos as $alumno) { ?>


                            <tr>
                                <td><?php echo $alumno['alumno'] ?></td>
                                <td><?php echo $alumno['nota1'] ?></td>
                                <td><?php echo $alumno['nota2'] ?></td>
                                <td>
                                    <?php
                                    $variable = $alumno['nota1'] + $alumno['nota2'] / 2;
                                    echo number_format($variable, 1, ",", ".")
                                    ?>
                                </td>
                                <?php $sumarpro += $variable ?>



                            </tr>
                        <?php
                        }    ?>


                    </tbody>


                </table>


            </div>


        </div>
        <div class="row">


            <div class="col-12">

                <p> <strong> Promedio del salón es:</strong><?php echo $sumarpro / 4 ?></p>
            </div>
        </div>




    </main>

</body>

</html>