<?php
//include 'functions.php';
//require 'functions.php';
require_once 'functions.php';

$contasCorrentes = [
  12345678910 => ["titular" => "Maria", "saldo" => 100],
  12345678911 => ["titular" => "Thiago", "saldo" => 200],
  12345678912 => ["titular" => "Chico", "saldo" => 1300],
  12345678913 => ["titular" => "Jó", "saldo" => 400],
  12345678914 => ["titular" => "Soares", "saldo" => 700],
  12345678915 => ["titular" => "Mario", "saldo" => 12300],
];

$contasCorrentes[12345678916] = ["titular" => "Fábio", "saldo" => 999999];

$contasCorrentes[12345678916]["saldo"] -= 1;




$contasCorrentes[12345678916] = sacar($contasCorrentes[12345678916], 1);

titularComLetrasMaiusculas($contasCorrentes[12345678910]);

foreach($contasCorrentes as $cpf => $dadosDaConta){
  echo "CPF: $cpf - Titular: {$dadosDaConta["titular"]} - Saldo: {$dadosDaConta["saldo"]} \n" ;
  
}

?>