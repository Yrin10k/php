<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="style.css">   
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
 <div>
    <?php 
  $teste = 5/2;
  $tst = intdiv(5,2);
  $big = max(3, 4, 5, 10, 19, 34, 1);
  $small = min(3, 4, 5, 10, 19, 34, 1);
  echo "real $teste e inteiro $tst";
echo "<h2>A função max() e min()</h2>
<p>é usado para pegar o valor minimo e maximo de uma sequencia por exemplo: </p>
<span>3 4 5 10 19 34 1</span>
<p>dos números acima o maior é $big</p>
<p>dos números acima o menor é $small</p>
";


echo
$p = pi();
"<h2>A função pi[]{em parenteses} e constante m_pi(em maiúsculo)</h2>
<p>servem para mostrar o valor de PI, as duas possuem o mesmo valor.</p>
<p>
  o valor de pi é $p <br>
  o valor de pi é M_PI
</p>  


";



  ?>
</div>


</body>
</html>