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
    </style>

    <title>Exercicio 03</title>
</head>
<body>
   <div class="topo"> <h1 class="titulo-main">
    
  Soma dos Números comprendidos entre um e outro número</h1>
    </div>
    <div class="meio">
       <form action="" method="post">
           
        <label for="v1">Primeiro Número:</label><br>
           <input type="number" name="v1" id="v1" required><br><br>
           <label for="v2">Segundo Número:</label><br>
           <input type="number" name="v2" id="v2" required><br><br><br>
           <input type="submit" value="Calcular" id="sub"  >

       </form>
      
       <div class="resultado">
          <?php 
          $v1=$_POST['v1'];
          $v2=$_POST['v2'];

          ?>
<?php

echo " A soma dos números compreendidos entre $v1 e $v2"?> 
é : <br>

<?php 
$soma=0;
for ($i=$v1+1; $i < $v2; $i++) { 
 
 $soma=$soma+$i;

}
echo $soma;

?>


         
</div>
    </div>
</body>
</html>
</body>
</html>