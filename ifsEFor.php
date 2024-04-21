<?php

// $number = 1;

// do{
    
//     echo($number);
//     echo("\n");
//     $number += 2;
// }
// while($number < 100);

// for($contador = 1; $contador <= 100; $contador++){

//     if($contador % 2 != 0){
//         echo($contador . PHP_EOL);
//     }
// }

// $multiplicador = 3;

// for ($multiplicando = 1; $multiplicando <= 10; $multiplicando++) { 
//     echo("$multiplicando X $multiplicador = " . $multiplicando * $multiplicador . "\n");
// }

echo "---------- IMC ------------";

$peso = 60;
$altura = 1.74;

$imc = $peso / ($altura * $altura);
echo("\n");

echo($imc);
echo("\n");

if($imc < 18){
    echo("Abaixo");
    
}elseif($imc < 25){
    echo("Dentro");
}else{
    echo("Fora");
}



?>