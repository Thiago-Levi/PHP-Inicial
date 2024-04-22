
<?php

$studentScores = [
  "Maria" => 10,
  "Jhosef" => 7,
  "Raul" => 3,
  "Allan" => 9,
  "Vinícius" => 6,
  "Bad" => null
];

$typeOfVar = gettype($studentScores);
echo($typeOfVar);

echo(PHP_EOL);

if(is_array($studentScores)){
  echo"passou";
}
//verifica se é um array numérico - php 8.1
echo("verifica se é um array numérico - php 8.1 ");
var_dump(array_is_list($studentScores));

foreach($studentScores as $name => $score){
  if($name === 'Vinícius'){
    echo "Vinicius está aqui!";
  }
 
}
//verifica se há uma chave em um determindao array
echo("verifica se há uma chave em um determindao array: ");
var_dump(array_key_exists('Allan', $studentScores));

//verifica se há uma chave em um determindao array e se esta chave não é nula
echo("verifica se há uma chave em um determindao array e se esta chave não é nula
: ");
var_dump(isset($studentScores['Bad']));

echo("Verificia se existe um determinado valor no array: ");
var_dump(in_array(3, $studentScores, true));

echo("Retorna a chave se existe um determinado valor no array: ");
var_dump(array_search(3, $studentScores, true));


?>
