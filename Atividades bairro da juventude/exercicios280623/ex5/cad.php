<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>
<body>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.
    css">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
label{
    font-size: 30px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

}
input{
    margin-top: 5%;
    width: 50%;

}
#sub{
    height: 5vh;
    font-weight: bolder;
    border-radius: 20px;
    border: none;
    background-color: rgb(80, 136, 168);
    color: white;
    font-size: 20px;
}
#sub:hover{
    border: 2px solid rgb(5, 77, 105);
}

#v1, #v2{
    width: 90%;
    height: 5vh;
    border-radius: 10px;
}
.topo{
    width: 100%; background-color: rgb(26, 86, 177); color: white; 
}
.titulo-main{
    padding: 3%; font-family: Arial, Helvetica, sans-serif;
}
.meio{
    width: 50%; margin-left: auto; margin-right: auto;
    background-color: rgb(20, 38, 97);
}
.resultado{
    margin-top: 10%;
    width: 85%;
    background-color: rgb(37, 104, 192);
    padding: 5%;
    color: white;
    font-weight: bolder;
    border-radius: 15px;
}
.tabuada{
    padding-left: 5%;
    padding-top: 5%;
    color: white;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.ancora{
    color: white;
    padding-left: 50%;
   
    width: 50%;
    text-decoration: none;

    font-size: 30px;
}
.ancora:hover{
    text-decoration: underline;
    
}
 
    </style>

    <title>Exercicio 05</title>
</head>
<body>
<?php 
 $num = $_POST['v1'];
 $comeca = $_POST['v2'];
 $termina = $_POST['v3'];
 
  
?>

   <div class="topo"> <h1 class="titulo-main">
  Tabuada Interativa com o User
 </h1>
    </div>
    <div class="meio">

    
<p style="font-size: 40px;" class="tabuada">
     
   <?php 
   for ($i=$comeca; $i < $termina+1; $i++) {
     
        echo $num," X ",$i," = ",$num*$i,"<br><br>";}
    
   ?>
    
   
</p>

        <a class="ancora" style="margin-top: 20%;" href="index.php">Voltar</a> 
    </div>
</body>
</html>
</body>
</html>