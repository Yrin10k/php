<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="style.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas v2.0</title>
</head>
<body>
<main>
    
<h1>Conversor de Moedas</h1>
<?php
     $inicio = date("m-d-Y", strtotime("-7 days"));//inicio vai conter a data de hoje menos 7 dias 
     $fim = date("m-d-Y");//fim será o dia de hoje 


     $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio.'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
     
     //tratar dados de cima ; função json_decode, serve para tratar dados em json.
     $dados = json_decode(file_get_contents($url), true); 
     //var_dump($dados);
     
     $cotacao = $dados["value"][0]["cotacaoCompra"];
 
     //
 
//Quanto voce tem? 
$real =$_REQUEST["din"] ?? 0;

//equivalencia em dollar
$dolar = $real / $cotacao;

$padrao = numfmt_create("pt-br", NumberFormatter::CURRENCY);

echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . 
numfmt_format_currency($padrao, $dolar, "USD") . "</strong>
Com fonte de dados do Banco Central
</p>";


?>
<button onclick="javascript:history.go(-1)">Voltar</button>






  
</main> 

</body>
</html>