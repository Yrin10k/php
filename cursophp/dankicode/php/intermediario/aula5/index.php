<?php 
//Trabalhando com Datas 

//isso deve estar sempre no inicio do código 

/*
date_default_timezone_set('America/Sao_Paulo');

$data = date('d/m/Y H:i:s', time()+(60*10));

echo $data;
*/

$titulo_site = 'Meu querido Site';
// para incluir qualquer arquivo  separado dinamicamente, no site 
include('header.php');

?>


<h1>Meu conteudo da Home</h1>

<?php 
include('footer.php');
?>