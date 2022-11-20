

<!DOCTYPE html>


<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
  <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <meta charset="utf-8" />
   
  </head>
    <body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">


       
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="novoform.php">Cadastro</a>
        </li>
       

                                  <li class="nav-item">
          <a class="nav-link" href="formulario_curriculo.php">Curriculo</a>
        </li>
                                <li class="nav-item">
          <a class="nav-link" href="calcula.php">Calculadora</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tabu_front.php">Tabuada</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="fibonacci.php">Fibonacci</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="imcfront.php">IMC</a>
        </li>
               <li class="nav-item">
          <a class="nav-link" href="fruitsheranca.php">Tabela Nutricional</a>
        </li>

                <li class="nav-item">
          <a class="nav-link" href="listaADM.php">Administradores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ra_pagina.php">About me</a>
        </li>
        
          <li class="nav-item">
          <a class="nav-link" href="logout.php">Sair</a>
        </li>
  

      </ul>
    
        <!-- Adiciona o fuso horário do local de um objeto DateTime -->
          <a class="nav-link disabled" href="#">Dia/Hora: <?php
                  date_default_timezone_set('America/Sao_Paulo');
                  $data = date('d-m-Y H:i'); echo $data; ?> </a>
      
    


      
       
    
    </div>
  </div>
</nav>



<!-- -->



  </body>
</html>

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
