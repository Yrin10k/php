<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="style.css">    
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
</head>
<body>
<main>
<h1>Analizador de Número Real</h1>    
<?php 
$num= $_POST["n"] ?? 0;//?? 0; operador de Equalecencia, caso não houver nenhum número

// caso haja precisão de formatação 
echo"<p>Analisando o número <strong>". number_format($num, 3, ",", ".") ."</strong> informado pelo usuário:</p>";


//caso seja feito por padrão: 
//echo"<p>Analisando o número $num informado pelo usuário:</p>"

//parte de divisão dos números 


$int = (int) $num;//parte inteira 
$fra =  $num-$int; // parte fracionária

// 3,14 == int 3 == 3,14 - 3 == 0,14

echo"<ul>  
<li>A parte inteira do número é <strong>". number_format($int, 0, ",", ".") ."</strong></li><br>
<li>A parte Fracionária do número é <strong>". number_format($fra, 4, ",", ".") ."</strong></li><br>

</ul>";




?>
<button onclick="javascript:history.go(-1)">Voltar</button>

</main>    

</body>
</html>