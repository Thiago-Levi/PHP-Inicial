<?php
$studentScores = [
  "Maria" => 10,
  "Jhosef" => 7,
  "Raul" => 3,
  "Allan" => 9
];


ksort($studentScores);
print_r($studentScores);

arsort($studentScores);
print_r($studentScores);

krsort($studentScores);
print_r($studentScores);

?>