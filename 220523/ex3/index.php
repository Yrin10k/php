<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terreno</title>
</head>
<body>
   <main>
       <section>
           <h1>Valor de Terreno</h1><br><br>

           <form action="" method="get">
<label for="Comprimento">Informe o comprimento</label><br><br> 
<input type="number" name="cm" id="cm"><br><br>
<label for="Comprimento">Informe a Largura</label><br><br>
<input type="number" name="lg" id="lg"><br><br>
<label for="Comprimento">Informe o Setor</label><br><br>
<input type="radio" name="op" value="1" checked><span>Centro</span><br>
<input type="radio" name="op" value="2"><span>Bairro</span><br>
<input type="radio" name="op" value="3"><span>Rural</span>
<br><br>
<input type="submit" value="Calcular">
           </form>
           <?php
           
           if(!isset($_GET["cm"]) and empty($_GET["cm"]) or !isset($_GET["lg"]) and empty($_GET["lg"]
           or !isset($_GET["op"]) and empty($_GET["op"]))){
            echo"<br>informe os valores acima!";
           }
            else{
        $area=$_GET["lg"]*$_GET["cm"];

           if($_GET["op"]==1){
            $vf = ($area*300);
            echo"O valor do terreno será de R\$$vf";

           }
          if($_GET["op"]==2){
            $vf = ($area*120);
            echo"O valor do terreno será de R\$$vf";
        }
          if($_GET["op"]==3){
           $vf = ($area*75);
           echo"O valor do terreno será de R\$$vf";
        }
    }
           ?>
          


       </section>
   </main> 
</body>
</html>