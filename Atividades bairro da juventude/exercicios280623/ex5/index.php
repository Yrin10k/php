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

    <title>Exercicio 05</title>
</head>
<body>
<?php 
 
  
?>

   <div class="topo"> <h1 class="titulo-main">
  Tabuada Interativa com o User
 </h1>
    </div>
    <div class="meio">
       <form action="cad.php" method="post">
           
        <label for="v1">Tabuada de :</label><br>
          
        <input type="number" name="v1" id="v1" required><br><br>
          
          
           <label for="v2">Começar por :</label><br>
          
           <input type="number" name="v2" id="v2" required><br><br> 
           
           <label for="v3">Terminar em :</label><br>
          
           <input type="number" name="v3" id="v2" required><br><br><br>

           <input type="submit" value="Montar Tabuada" id="sub"  >

       </form>
      
     
    </div>
</body>
</html>
</body>
</html>