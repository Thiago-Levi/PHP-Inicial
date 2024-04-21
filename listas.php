<?php
require_once 'banco.php';
$ages = [17, 39, 56, 20, 10];
unset($ages[0]);


//list($ageOfJhon, $ageOfJack, $ageOfAnnie) = $ages;

//echo $ageOfAnnie;

foreach($contasCorrentes as $cpf => $conta){
  
  echo "{$cpf}  {$conta["titular"]}  {$conta["saldo"]} \n";
  
}

unset($contasCorrentes[12345678912]);

foreach ($contasCorrentes as $cpf => $conta) {
  list('titular' => $titular, 'saldo' => $saldo) = $conta;
  
  echo "\n {$titular} - {$saldo} \n";
}

print_r($ages);
echo "{$ages[1]}"


?>