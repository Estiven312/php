<?php

function print_f($variable){


    if (is_array($variable)) {

        $archivo=fopen('datos.txt', 'a+');
        foreach ($variable as $iten) {
            fwrite($archivo,$iten);
           

            # code...
        }
        fclose($archivo);

        # code...
    }else {
        file_put_contents("datos.txt",$variable);
    }
    echo"Archivo generado";
}


$aNotas= array(8,5,7,9,10);
$msg="Este es un mensjae";

print_f($aNotas)




?>