<!-- 

página utlizada para cálculo e IMPRESSÃO DA sequência do fibonacci a partir de
três valores inseridos 

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
    <title>Fibonacci</title>
  </head>
    <body>

<?php

  include 'navbar.php';

// INCLUDE

?>




<br><Br>

        <div align="center">
  <div class="card" style="width: 40rem;">
  <img src="image/img8.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sequência de Fibonacci</h5>

<form action="fibonacci.php"  method="GET">
                  <div class="form-group">
          <input class="form-control" type="number" name="num">
                  </div>
                  <div class="form-group">
          <input class="form-control" type="number" name="num2">
                  </div>
                                    <div class="form-group">
          <input class="form-control" type="number" name="num3">
                  </div>


                    <button type="submit" name="submit" class="btn btn-dark col-lg-4 mt-3 bt-log-form">Gerar</button>
                  
</form>


<h1 class="display-4">
    <?php

function fibonacci($fi) {
  if (isset($_GET['submit'])){
  
  $v1 = $_GET['num'];
  $v2 = $_GET['num2'];
  $v3  = $_GET['num3'];




for ($cont=0; $cont <= $fi; $cont++) {
if($cont <=1) {
$v3 = $cont;
}else{
$v3 = $v1 + $v2;
$v1 = $v2;
$v2 = $v3;
} $res = $v3+$v1;
    echo "$v3 + $v1 = $res  <br><br>";
}
  }
} fibonacci (13);

    ?>



</h1>
       
<br>

      
   
    <a class="btn btn-dark" href="index.php" role="button">Voltar</a>

  </div>

</div>
</div>

</body>
</html>
<br>

<?php

  include 'rodape.php';

// INCLUDE

?>

