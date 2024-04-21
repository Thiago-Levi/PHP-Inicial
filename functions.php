<?php
function sacar(array $conta, float $valorASacar): array{
  if($valorASacar > $conta["saldo"]){
      echo "Saldo insuficiente!";
  }else{
    $conta["saldo"] -= $valorASacar;
  }
  return $conta;
}

function titularComLetrasMaiusculas(array &$conta){
    
   $conta['titular'] = strtoupper($conta['titular']);
  
}
?>