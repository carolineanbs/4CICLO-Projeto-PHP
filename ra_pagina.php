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


<!-- 

Página para descrição do projeto e
dados pessoais da criadora do projeto

 -->

<!DOCTYPE html>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <title>About Me</title>
  </head>
    <body>

<?php

  include 'navbar.php';

// INCLUDE

?>



            <div align="center" > 
           <div class="col-xs-12 col-lg-6 form-login">

            <div class="col-md-12 toppen mt-5 mb-5">
              
        <h5 class="display-5">Bem Vindo(a)!</h5>
    </div>
            </div>
          </div>


        <div align="center">
  <div class="card" style="width: 22rem;">
  <img src="image/img10.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">About</h5>
    <h6>Projeto desenvolvido durante o semestre para a matéria de Linguagem de Programação IV.</h6><br>
    <a href="hero.php" class="btn btn-outline-danger" role="button" aria-pressed="true">Hexacode </a><br><br>
    <b>Professor:</b> Jônatas Cerqueira Dias
<br><br>
    <p class="card-text"> Clique nos links abaixo!

    </p>

      <a href="https://github.com/carolineanbs" class="btn btn-outline-success" role="button" aria-pressed="true">GitHub </a>
      <a href="https://www.linkedin.com/in/caroline-santos-926522209/" class="btn btn-outline-primary" role="button" aria-pressed="true">Linkedin </a>
       
      <br><b>RA:</b> <span class="badge bg-danger">1290482022029</span><br><br>

       


      
   
    <a class="btn btn-dark" href="index.php" role="button">Voltar</a>

  </div>
  <br><br>
</div>
</div>

</body>
</html>
<br>

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