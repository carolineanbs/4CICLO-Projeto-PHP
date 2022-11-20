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
    <title>Calculadora</title>
  </head>
    <body>

 <?php

  require  'navbar.php';

// calculadora

?>

    <div align="center">
 <h1 class="display-3"> Bem-vindo!</h1>
 </div> 
 <hr>    
  <br> 



<!-- FORMULARIO PARA INSERÇÃO DE VALORES NÚMERICOS -->

<div align="center">

<div class="card" style="width: 23rem;">
  <img src="image/img8.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"></h5>
     <p class="card-text">Selecione a operação desejada:</p>
        <form action="calculator.php" method="get">
       <h5 class="card-title"><span class="badge bg-secondary">Primeiro Número</span></h5>
        <input name="n1" type="text" class="form-control" placeholder="1° Número" aria-label="Small"/>
        <br  />

        <h5 class="card-title"><span class="badge bg-secondary">Segundo Número</span></h5>
        <input name="n2" type="text" class="form-control" placeholder="2° Número" aria-label="Small"/>
        <br/>




<!-- SELEÇÃO DA OPERAÇÃO -->
      
                  <div  align="center">
                  <div class="form-floating">
                    <h5 class="card-title"><span class="badge bg-success">Operação</span></h5>

      <select name="operacao" class="form-select" id="floatingSelect" aria-label="Floating label select example">
       <option selected>Nenhuma opção selecionada</option>
       <option value="soma" >1. Soma<br></option>
        <option value="subtracao">2. Subtração<br></option>
         <option value="multiplicacao">3. Multiplicação<br></option>
         <option value="divisao">4. Divisão<br></option>
  </select>
 

                  </div>
                  </div>
  




         
     <br>
<button  class="btn btn-outline-success btn-sm" type="submit" value="Enviar">Enviar</button>
<button  class="btn btn-outline-success btn-sm" type='reset' value='Limpar'>Limpar</button>

    
  </form>              
  </div>
</div>
</div>


<br><br>
     
</div>




</body>
</html>



 <?php

  require  'rodape.php';

// calculadora

?>