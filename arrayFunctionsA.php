<?php
$myHashMapArray = [0 => 1, 1 => 2, 2 => 3, 3 => 4];
$myArray = [3, 2, 10, 1];

foreach($myHashMapArray as $key => $value){
   // echo "{$key} => {$value} \n";
}

foreach($myArray as $value){
  //echo "value: {$value} \n";
}

$syzeOfArrayMyHashMapArray = count($myHashMapArray);
//echo "{$syzeOfArrayMyHashMapArray}";

sort($myArray);

//print_r($myArray);


$studentScores = [
  ["name" => "Maria", "score" => 10],
  ["name" => "Jhosef", "score" => 7],
  ["name" => "Raul", "score" => 3]
];


function mySortFunction(array $studentScoreA, array $studentScoreB ){
  if($studentScoreA["score"] > $studentScoreB["score"]){
    return -1;
  }
  if($studentScoreA["score"] < $studentScoreB["score"]){
    return 1;
  }

  return 0;
  
}

function mySortFunctionReversed(array $studentScoreA, array $studentScoreB ){

  return $studentScoreA["score"] <=> $studentScoreB["score"];
  
}

usort($studentScores, 'mySortFunction');

print_r($studentScores);

usort($studentScores, 'mySortFunctionReversed');
echo("Reversed ARRAY");
print_r($studentScores);





?>