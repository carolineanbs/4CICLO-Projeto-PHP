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

<?php

    ini_set('default_charset', 'UTF-8');


# RESULTADO DA PAGINA CALCULA.PHP
# Lê o valor inserido pelo cliente +
# a escolha do operador lógico
#  E imprime o resultado do calculo

?>

<!DOCTYPE html>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <title>Calculadora</title>
  </head>
    <body>
<?php


  include 'navbar.php';


?>

<br>
<div align="center">


<div align="center">

<div class="card" style="width: 23rem;">
  <img src="image/img8.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><span class="badge bg-success">Resultado</span></h5>


     
<?php

     if(isset($_GET["n1"]))
    {    $x = $_GET["n1"];
        $y = $_GET["n2"];
        $op = $_GET["operacao"];

        // DECLARAÇÕES DAS VARIAVEIS DOS NÚMEROS
        // E DA OPERAÇÃO

       if($op =="soma")  # SE O USUARIO ESCOLHER SOMA 
        {
            $z = $x+$y; # EQUAÇÃO
            echo "Está é a sua <b>equação:</b></br> $x + $y = $z"; # IMPRESSÃO DO RESULTADO
        }
        elseif($op =="subtracao") # SE O USUARIO ESCOLHER SUBTRAÇÃO 
        {
            $z = $x-$y; # EQUAÇÃO
            echo "Está é a sua <b>equação:</b></br> $x - $y = $z"; # IMPRESSÃO DO RESULTADO
        }
        elseif($op=="multiplicacao") # SE O USUARIO ESCOLHER MULTIPLICAÇÃO
        {   $z=$x*$y; # EQUAÇÃO
            echo "Está é a sua <b>equação:</b></br> $x * $y = $z"; # IMPRESSÃO DO RESULTADO
        }
        elseif($op=="divisao") # SE O USUARIO ESCOLHER DIVISÃO
        {    
            $z=$x/$y; # EQUAÇÃO
            echo "Está é a sua <b>equação:</b></br> $x / $y = $z"; # IMPRESSÃO DO RESULTADO
        }

    }

?>

</div>
<br>
 <div align="center">
        <a class="btn btn-outline-success" href="calcula.php" role="button">Voltar</a>
      </div><br>
  </div>
</div>
</body>
</html>
