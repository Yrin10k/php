<?php 
 $conteudo ='Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia numquam dolore eum, doloremque inventore earum dolores laudantium quam optio sed, modi voluptas nesciunt quo. Dolores deserunt repellat eveniet sunt illum?';

 //Serve para recortar uma string.
 
 //echo substr($conteudo,0,20);

 $nome = 'Guilherme Cherem Grillo';

 $nomes = explode(' ', $nome);

 //print_r($nomes);
$nomes = implode(' FAZ THE L ',$nomes);

//echo $nomes; 

// Strip_tags serve para retirar todo codigo HTML.
$conteudo= '<h1>Guilherme</h1> Outra coisa';

//echo strip_tags($conteudo);


// Htmlentities() serve para mostrar código Html no navegador 

echo htmlentities('<div></div>');


?>