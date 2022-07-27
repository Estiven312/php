<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola</title>
</head>
<body>

<?php 
echo "hola mundo <br>" ;
echo date("d/m/Y <br>");

/*for ($i=0; $i >100; $i++) { 
    echo $i
}*/


for ($i=0; $i <= 100; $i++) { 
   echo $i."<br>";
};
echo"<br>";

echo"<br>";



for ($j = 0; $j <= 100; $j++) {
    echo $j . "<br>";
    if ($j >= 60) {
        break;
    };
    
};

echo "<br>";

echo "<br>";


for ($p = 2; $p <= 100;$p= $p+2) {
   echo$p."<br>";
};


echo "<br>";

echo "<br>";


$suma=0;
function promediar($aNotas=array()){
    $variable=0;

    for ($i=0; $i <count($aNotas) ; $i++) {
        $variable += $aNotas[$i];
    };

   // foreach ($aNotas as $nota) {
        
   // }

    
    $promedio=$variable/count($aNotas);
    echo$promedio;
    return $promedio;

}

$aNotas=array(8,4,5,3,9,1);



echo "El promedio es: ". promediar($aNotas)."<br>";



function maximo($variable=array()){

    $variable1=max($variable);
    return $variable1;
    

};
$aSueldo=array(800.30,400.87,500.45,300,900.70,100,900,1800);


echo "La nota  más alta es:  ". maximo($aNotas) . "<br>";
echo "El sueldo más alto es::  ".number_format( maximo($aSueldo),2,",",".")





?>
    
</body>
</html>