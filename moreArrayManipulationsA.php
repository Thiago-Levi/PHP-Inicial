<?php
$studentScoresA = [
  "Maria" => 10,
  "Jhosef" => 7,
  "Raul" => 3,
  "Allan" => 9,
  "Vinícius" => 6,
  "Bad" => null,
  "MyBad" => 9
];


$studentScoresB = [
  "Raul" => 3,
  "Allan" => 9,
  "Vinícius" => 6,
  "Bad" => null
];

$mySimpleNumbers = [23, 2, 34, 14, 6];

echo("Retorna a diferença entre um ou mais arrays. Só compara valore e não chaves: ");
var_dump(array_diff($studentScoresA, $studentScoresB));

echo("Retorna a diferença entre um ou mais arrays. Compara chaves e não valores: ");
var_dump(array_diff_key($studentScoresA, $studentScoresB));

echo("Retorna a diferença entre um ou mais arrays. Compara chaves e também valores: ");
var_dump(array_diff_assoc($studentScoresA, $studentScoresB));

echo("Recebe um array e devolve suas chaves: ");
//É possível fazer busca adicinando o segundo parametro
//ex: array_keys($studentScoresB, 9)
var_dump(array_keys($studentScoresB));
var_dump(array_keys($mySimpleNumbers, 14));

echo("Recebe um array e retorna o valores");
var_dump(array_values($studentScoresB));



?>