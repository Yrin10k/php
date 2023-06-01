<?php 
 //$nome = 'Guilherme';

 /*
switch ($nome) {
    // case = caso seja 'string' ou qualquer condição;  
    
    case 'Guilherme': // : utilizado como { do if
     
        echo 'Minha variavel é Guilherme'; // todo o codigo desejado assim como o if
     
        break; // Break serve como Fimcaso ou seja fim do codigo 
    
    case 'Joao': 
        echo 'Minha variavel é João'; 
        break;
    }
*/

//Break para o loop for, while, do e foreach e switch;

/*
for ($i=0; $i<10; $i++) { 
 echo $i;
 echo'<hr>';
 if($i==5){
    break;
 }
}
*/

// a condição if pode ser usada sem os {} , mais irá ler apenas a primeira depois do if(condição)
/*
$var = true; 

if($var == true)
$nome = 'Guilherme';
$idade=23;

echo $idade;
echo '<br>';
echo $nome;
*/

// Continue para loop for, while,do e foreach; não se encaixa para switch 

for ($i=0; $i<10; $i++) { 
    if($i==5)
       continue;
    echo $i;
    echo'<hr>';

   }

?>