<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">k
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     
  
<?php
     $inicio = date("m-d-Y", strtotime("-7 days"));//inicio vai conter a data de hoje menos 7 dias 
     $fim = date("m-d-Y");//fim será o dia de hoje 


     $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio.'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
     
     //tratar dados de cima ; função json_decode, serve para tratar dados em json.
     $dados = json_decode(file_get_contents($url), true); 
     //var_dump($dados);
     
     $cotacao = $dados["value"][0]["cotacaoCompra"];
 
     //
 ?>

<h1>Conversor de Moedas v1.0</h1>
<?php

$real = $_REQUEST["enviar"];
$tranformed = round($real / $cotacao);
echo "<p>Seus R$ $real equivalem  a US$ $tranformed</p>";
echo "A cotação foi US$ $cotacao  Atualizada pelo Banco Central"
?>

<a href="index.html"><button>Voltar</button></a>

</section>

 
</body>
</html>
