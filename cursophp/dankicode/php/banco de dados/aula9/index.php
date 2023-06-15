<?php 
//FAZER ISSO PARA UM MELHOR PROFISSIONALISMO
define('HOST','localhost');
define('DB','ayron');
define('USER','root');
define('PASS','');


    try{
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));//SET NAMES UTF-8 -> PARA NÃO HAVER PROBLEMAS COM ACENTUAÇÃO
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        echo '<h1>erro ao conectar</h1>';
    }
//$sql = $pdo->prepare("SELECT * FROM posts9");
//$sql->execute();

?>