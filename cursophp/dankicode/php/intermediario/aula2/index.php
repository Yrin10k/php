<?php 
// Arrays single

$arr = ['guilherme', 'joao'];
$arr = array('guilherme','chave' => 'joao');

$arr[0] = 'Guilherme';
$arr[] = 'joao';

// Arrays Multidimensionais 

//$arr2 = array(array('Guilherme', 'joao'), array(23, 45));

//$arr2[0] = array('chave1'=>'guilherme','joao');

// => é o sinal para atribuir uma chave  

$arr2[0]['chave1'] = 'GHHuilherme'; 

echo $arr2[0]['chave1'];

?>