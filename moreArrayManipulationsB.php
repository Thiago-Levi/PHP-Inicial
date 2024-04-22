<?php

$arrayA = ["A", "b", "Charles"];
$arrayB = [1, 4, "Five", false, "A"];

$arrayAB = array_merge($arrayA, $arrayB);

echo "Mergeando arrays";
print_r($arrayAB);

echo "Desempacotando arrays :";
$unpackedArray = [...$arrayA, "bla",...$arrayB, "foo", "bar"];
print_r($unpackedArray);

echo "Adicionando elemento ao final do array: ";
//Ex 1:
$unpackedArray[]  = "LastOne";
//Ex 2:
array_push($unpackedArray, "LastTwo", "LastTree");
print_r($unpackedArray);

echo "Adicionando elemento no inicio do array: ";
array_unshift($unpackedArray, "FirstOne", "FirstTwo");
print_r($unpackedArray);



?>