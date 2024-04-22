<?php
$studentScores = [
  "Maria" => 10,
  "Jhosef" => 7,
  "Raul" => 3,
  "Allan" => 9
];


//ordenar pelas chaves
ksort($studentScores);
print_r($studentScores);

//reverse
arsort($studentScores);
print_r($studentScores);

//reverse
krsort($studentScores);
print_r($studentScores);

//ordenar pelos valores
asort($studentScores);
print_r($studentScores);





?>
