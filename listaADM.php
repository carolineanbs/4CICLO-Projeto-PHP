<?php

# Está pagina descreve o nome dos administradores ficticios
# e dos seus cargos ficticios 
# utilizando um array.


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

// ARRAY COM NOME DOS ADMINISTRADORES

$nomes2 = array('Arthur Moura','Rafaela Napoleão','Gabrielle Nishimura','Sebastian Souza','Wellington Martins'); #Array texto


// ARRAY COM SEUS RESPECTIVOS CARGOS

$funcoes2 = array('Analista de Software','Marketing Digital','Diretora de Comunicações','Arquitero de Software','Analista de Banco de Dados'); #Array texto

?>

<!DOCTYPE html>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <title>PHP - Projeto</title>
  </head>
    <body>
<?php

  include 'navbar.php';

// INCLUDE

?>

      <div align="center">

 
 <div class="alert alert-success" role="alert">
 <h1 class="display-6">Administradores do Sistema</h1>
</div>
</div> 


<!-- echo IMPRESSÃO DOS NOMES E DOS CARGOS -->

   <div align="center">

<div class="card" style="width: 30rem;">
  <img src="image/img8.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><span class="badge bg-dark"></span></h5>
  <div class="col-10">
      <ul class="list-group">
  <li class="list-group-item "> <?php echo $nomes2[0];?> <br><b>Cargo:</b> <?php echo $funcoes2[0];?>   </li>

    <li class="list-group-item "> <?php echo $nomes2[1];?> <br><b>Cargo:</b> <?php echo $funcoes2[1];?>   </li>

      <li class="list-group-item "> <?php echo $nomes2[2];?> <br><b>Cargo:</b> <?php echo $funcoes2[2];?>   </li>

        <li class="list-group-item "> <?php echo $nomes2[3];?> <br><b>Cargo:</b> <?php echo $funcoes2[3];?>   </li>

        <li class="list-group-item "> <?php echo $nomes2[4];?> <br><b>Cargo:</b> <?php echo $funcoes2[4];?>   </li>



</ul>
  </div>
     </div><br>
      <div align="center">
        <a class="btn btn-outline-success" href="index.php" role="button">Voltar</a>
      </div>
 
<br>

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