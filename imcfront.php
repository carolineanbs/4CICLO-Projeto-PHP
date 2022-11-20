
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

  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Peso</label>
      <input type="number" class="form-control mb-2" id="inlineFormInput" name="peso" placeholder="Peso: '00' ">
    </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">Altura</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"></div>
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroup" name="altura" placeholder="Altura: '0.00' ">
      </div>
    </div>
    <div class="col-auto">
      <div class="form-check mb-2">
       
        
      </div>
    </div>
    <div class="col-auto">
      <button type="submit" name="submit" class="btn btn-dark mb-2">Calcular</button>
    </div>
  </div>
</form>


       
<br>

      
   
    <a class="btn btn-dark" href="index.php" role="button">Voltar</a>

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



