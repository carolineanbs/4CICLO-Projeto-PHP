
<!-- 

<?php

# Cálculo do IMC 
# Uso de SWITCH/CASE
# p = peso
# a = altura

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
    <title>IMC</title>
  </head>
    <body>

<?php

  include 'navbar.php';

// INCLUDE

?>




<br><Br>

        <div align="center">
  <div class="card" style="width: 40rem;">
  <img src="image/img12.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cálculo do IMC</h5>
 
<form action="imc.php"  method="GET">


  
   
          <?php



$p = $_GET['peso'];
$a = $_GET['altura'];


$imc = $p/($a**2);



switch ($imc) {
  case ($imc < 18.5):
      echo "Você esta abaixo de seu peso. Seu IMC é: ". number_format($imc,1,',','') .PHP_EOL;
      break;
  case ($imc >= 18.5 && $imc <= 24.9):
      echo "Você esta no seu peso ideal. Seu IMC é: ". number_format($imc,1,',','') .PHP_EOL;
      break;
  case ($imc >= 25.0 && $imc <= 29.9):
      echo "Você está acima de seu peso (sobrepeso). Seu IMC e: ". number_format($imc,1,',','') .PHP_EOL;
      break;
  case ($imc >= 30.0 && $imc <= 34.9):
      echo "Você está com Obesidade grau I. Seu IMC é: ". number_format($imc,1,',','') .PHP_EOL;
      break;
  case ($imc > 34.9):
      echo "Você está com Obesidade grau II (severa). Seu IMC é: ". number_format($imc,1,',','') .PHP_EOL;
      break;
}

?>

    </div>
    <div class="col-auto">
      <div class="form-check mb-2">
       
        
      </div>
    </div>
</div>
  </div>
</form>
<br>
<div align="center">
<a class="btn btn-dark" href="imcfront.php" role="button">Voltar</a>
</div>


  </div>

</div>
</div>
<br><br>
</body>
</html>


<?php

  include 'rodape.php';

// INCLUDE

?>



