<?php
//conecção
$pdo = new PDO('mysql:host=localhost;dbname=db_teste','root','');
//Selecionar tudo da tabela 
$sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY cargo ORDER BY nome ASC LIMIT 3");
$sql->execute();
$clientes = $sql->fetchAll();//puxar tudo(linhas e colunas)


foreach ($clientes as $key => $value) {
    
echo $value['nome'];
echo '<hr>';

}


?>