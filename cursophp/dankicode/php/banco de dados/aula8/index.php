<?php
//conecção
/*//Selecionar tudo da tabela 
$sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY cargo ORDER BY nome ASC LIMIT 3");
$sql->execute();
$clientes = $sql->fetchAll();//puxar tudo(linhas e colunas)


foreach ($clientes as $key => $value) {
    
echo $value['nome'];
echo '<hr>';

}
*/

$pdo = new PDO('mysql:host=localhost;dbname=db_teste','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = $pdo->prepare("SELECT * FROM `clientes` INNER JOIN cargos ON `clientes`.`cargo`=`cargos`. `id`");
$sql->execute();
$clientes = $sql->fetchAll();//puxar tudo(linhas e colunas)


foreach ($clientes as $key => $value) {
    
echo $value['nome'];
echo ' | ';
echo $value['nome_cargo'];
echo '<hr>';
}


?>