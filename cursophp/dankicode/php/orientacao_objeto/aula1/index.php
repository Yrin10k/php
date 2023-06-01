<?php 
class Pessoa{
//Objeto Pessoa

private $noem = 'Ayron';
private $idade = '14';
private $peso = '61kg ';

public function crescer(){
$this->comer();
    echo 'estou crescendo';

}

private function comer(){
echo 'estou comendo'; 

}


}

//Instanciar / Criar
$pessoa = new Pessoa;

$pessoa->crescer();


?>