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

// declarações das variaveis

    // com os respectivos valores dos input

  $nome = $_POST['name'];

   $endereço = $_POST['end'];

   $cidade = $_POST['city'];

   $estado = $_POST['estado'];
   
   $nacio = $_POST['nacio'];
   
   $dtnas = $_POST['dtnas'];

   $idade = $_POST['idade'];

   $telefone = $_POST['tel'];

   $sexo = $_POST['sexo'];

   $estadocivil = $_POST['estcivil'];
  
   $email = $_POST['email'];

   $escolaridade = $_POST ['escolaridade'];

     
   $ensino = $_POST ['ensino'];

   $curso = $_POST ['curso'];

    $cursoSN = $_POST ['cursoSN'];

   $experiencia = $_POST ['exp'];



?>

<!DOCTYPE html>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
  <head>


    <meta charset="utf-8" />
    <title>Seu CV!</title>
  </head>
    <body>

<?php

  include 'navbar.php';

// INCLUDE

?>



<br><br>

 <div align="center" > 
<div class="card" style="width: 50rem;">


  <div class="card-body">

    <h1 class="card-title"><span class="badge rounded-pill bg-success"><?php echo $nome  ?></span></h1>
<br><br>
<form class="row g-3" value="mycv">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label"><h6>Endereço:</h6></label>
    <?php echo $endereço  ?><br>
     <label for="inputEmail4" class="form-label"><h6>Cidade:</h6></label>
   <?php echo $cidade  ?><br>

         <label for="inputEmail4" class="form-label"><h6>Estado:</h6></label>
    <?php echo $estado  ?><br>

  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label"><h6>Data de Nascimento:</h6></label>
    <?php echo $dtnas ?> <br>
    <label for="inputPassword4" class="form-label"><h6>Idade:</h6></label>
      <?php echo $idade ?><br>
          <label for="inputPassword4" class="form-label"><h6>Nacionalidade:</h6></label>
    <?php echo $nacio ?><br>
  </div>  
  <div class="col-12">  <br><br>
    <label for="inputAddress" class="form-label"><h6>Escolaridade:</h6></label>
    <?php echo $escolaridade ?> <br>
      <p class="h6">Status:</p><?php echo $ensino ?> <br>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label"><h6>Curso:</h6></label>
    <?php echo $curso ?> <br>
      <p class="h6">Status:</p><?php echo $cursoSN ?> <br>  <br><br>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label"><h6>Experiência em T.I:</h6></label>
        <?php echo $experiencia ?><br>
  </div>
  <div class="col-md-4">
    <label for="inputPassword4" class="form-label"><h6>Sexo:</h6></label>
    <?php echo $sexo ?> <br>
  </div>
  <div class="col-md-2">
    <label for="inputPassword4" class="form-label"><h6>Estado Civil:</h6></label>
    <?php echo $estadocivil ?> <br>
  </div>
  <div class="col-12">
    <div class="form-check">
          <label for="inputPassword4" class="form-label"><h6>Telefone:</h6></label>
    <?php echo $telefone ?> <br>  <br><br>
    </div>
  </div>
 
</form>
            </div>
</div>

</div>
<br><br>
 <div align="center">
    <input type="button" class="btn btn-outline-success" value="Imprimir" onClick="window.print()"/>

  </div>
<br><br>
</body>
</html>

<?php

  require 'rodape.php';

// INCLUDE

?>