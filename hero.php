

<!-- 

<?php

// Impressão na tela utilizando FOREACH
# Códigos fonte das cores
# Hexacodes #0000

    ?>

 -->


 <?php



session_start();
if (!isset($_SESSION['submit']) || $_SESSION['submit'] == false) {
  header("Location: index.php");
}







// Caroline Andrade Bispo dos Santos
// Fatec Praia Grande
// RA: 1290482022029
// Professor: Jônatas Cerqueira Dias 
// Matériia: Linguagem de Programação IV
// Linguagem: PHP
// Software: xampp


# Este projeto tem apenas como objetivo, fins acadêmicos.
# Foi criado como estrutura base referente a tudo que foi ensinado durante 
# o 2° bimestre.

?>

<!DOCTYPE html>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <title>Hexacode</title>
  </head>
    <body>

<?php

  include 'navbar.php';

// INCLUDE

?>




<br><br>

<!--

###TESTE1

$heroes = [
    ['Batman',   'Bruce Wayne'],
    ['Flash',    'Barry Allen'],
    ['Superman', 'Clark Kent'],
     ['Captain America', 'Steve Rogers'],
];

foreach ($heroes as [$hero, $realname]) {
    echo "$hero is $realname\n";
}
###FIMTESTE1
-->

<div align="center">

<br><br>
<div class="card" style="width: 40rem;">
  <img src="image/img0000.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cores do Projeto PHP</h5>

    <i>O sistema hexadecimal é um sistema de numeração posicional que representa 
        os números em base 16, portanto empregando 16 símbolos.</i><b>Arrigoni, 2022)<b>

       
   
   <!-- 

    
Quando queremos usar cores em um documento HTML precisamos usar esses valores hexadecimais,
 por que o HTML só suporta esse formato para cores, exceto algumas cores que além do
  hexadecimal, também aceita o nome dela em inglês, como irá mostrar na tabela mais
   abaixo.

  www.linhadecodigo.com.br/

   -->
<br><br>

<?php 
    $cores = array("#181+A1B","#A51D2A","#0056B3","#3BCA7C","#006400","#2C2F31"); #descreve a cor em hexadecimal
    foreach ($cores as $key => $value) { 
        echo "Hexadore  ".$key."° : <b>".$value."</b><br/>";
    }
?>

</div>
</dio>
</div>

<br><br>


<?php

  include 'rodape.php';

// INCLUDE

?>


<!--

This project has only academic purposes.

Most pictures from this project came from 

https://wallhaven.cc/
https://br.freepik.com/home


Framework:

https://getbootstrap.com/

Programming Language:

https://www.php.net/

Best wishes.



 -->