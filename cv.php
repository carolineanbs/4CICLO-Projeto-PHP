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


// Recebe o valor das variaveis via POST  
//  Imprime um cúrriculo completo com base no que o
// usuário inseriu


    ini_set('default_charset', 'UTF-8');



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
    <h5 class="card-title"><span class="badge rounded-pill bg-dark"><?php echo $nome  ?></span></h5>

<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Endereço:</label>
    <p class="h6"><?php echo $endereço  ?></p>
     <label for="inputEmail4" class="form-label">Cidade:</label>
    <p class="h6"><?php echo $cidade  ?></p>

         <label for="inputEmail4" class="form-label">Estado</label>
    <p class="h6"><?php echo $estado  ?></p>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Nacionalidade:</label>
    <p class="h6"><?php echo $nacio ?></p>
    <label for="inputPassword4" class="form-label">Data de Nascimento:</label>
    <p class="h6"><?php echo $dtnas ?> </p>
    <label for="inputPassword4" class="form-label">Idade:</label>
    <p class="h6"><?php echo $idade ?></p>
    <label for="inputPassword4" class="form-label">Telefone:</label>
    <p class="h6"><?php echo $telefone ?> </p>
     <label for="inputPassword4" class="form-label">Sexo:</label>
    <p class="h6"><?php echo $sexo ?> </p>
     <label for="inputPassword4" class="form-label">Estado Civil::</label>
    <p class="h6"><?php echo $estadocivil ?> </p>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Escolaridade:</label>
    <p class="h6"><?php echo $escolaridade ?> </p>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Curso:</label>
    <p class="h6"><?php echo $curso ?> </p>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Experiência</label>
    <p class="h6"><?php echo $experiencia ?></p>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <p class="h6">342342342</p>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <p class="h6">342342342</p>
  </div>
  <div class="col-12">
    <div class="form-check">
          <label for="inputZip" class="form-label">Zip</label>
      <p class="h6">342342342</p>
    </div>
  </div>
  <div class="col-12">
    <input type="button" class="btn btn-outline-success" value="Imprima seu CV" onClick="window.print()"/>
  </div>
</form>
            </div>
</div>
</div>
<br><br>
</body>
</html>

<?php

  require 'rodape.php';

// INCLUDE

?>