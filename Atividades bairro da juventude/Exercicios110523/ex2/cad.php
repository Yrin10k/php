<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combustivel</title>
</head>
<body>    

<?php 
$litro = $_GET["litros"];
$tipo = $_GET["tipo"];
if($tipo=="1"){
    $final = $litro * 5.83;
}
if($tipo=="2"){
    $final = $litro * 5.15;
}
echo "VocÊ irá gastar R\$ $final"

?><br><br>
<a href="index.html"><button>Voltar</button></a>
</body>
</html>