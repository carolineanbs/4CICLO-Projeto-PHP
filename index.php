<?php


// está é a pagina DE LOGIN para o usuário
// TER ACESSO as paginas do projeto atráves de uma sessão
// do seu login


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


session_start();

if (isset($_SESSION['submit']) && $_SESSION['submit'] == true) {
  header("Location: home.php");
}





if (isset($_POST['submit'])) {
  $user = $_POST['email'];
  $pass = $_POST['senha'];
  if ($user == "admin" && $pass == "admin") {
    $_SESSION['submit'] = true;
    header("Location: home.php");
  } else if ($user != "admin" && $pass != "admin") {

    $erro = 'POR FAVOR VERIFIQUE SENHA OU USUARIO INCORRETO! ';



    echo "<script>alert('$erro');location.href=\"index.php\";</script>";
  }
}
?>


<!DOCTYPE html>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <title>Login</title>
  </head>
    <body>

<?php

  include 'navbar.php';

// INCLUDE

?>
<!-- -->

    <div align="center">
 <h1 class="display-3"> Bem-vindo!</h1>
 </div> 
 <hr>    
<br><br>

 





          





<!-- -->

  <div align="center" > 
<div class="card" style="width: 24rem;">
  <img src="image/img7.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><span class="badge rounded-pill bg-dark">Olá!</span></h5>
    
 <form action="index.php"  method="POST">
                  <div class="form-group">
          <input class="form-control" type="text" name="email" placeholder="E-mail">
                  </div>

                  <div  align="center">
            <input class="form-control mt-3" type="password" name="senha" placeholder="Senha">
                  </div>


                    <button type="submit" name="submit" class="btn btn-dark col-lg-4 mt-3 bt-log-form">Login</button>
                  
</form>
             
  </div>
</div>
</div>


<br><br>


  

  
  </body>
</html>
<br>
<?php

  include 'rodape.php';

// INCLUDE

?>