
<?php include "conn.php"; ?>




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

Página para cadastro de pessoas e usuários
com conexão com banco de dados
phpmyadmin

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
    <h5 class="card-title">Cadastro</h5>
    
    <?php


    //declaração de variáveis
	$nome = $_POST['nome'];
	$ender = $_POST['ender'];
	$rg = $_POST['rg'];

	//insere os dados na tabela
	$query = "INSERT INTO pessoa (nome,rg,ender) VALUES ($nome, $rg, $ender)";
	
	$ok = mysqli_query($conn,$query);
	//verifica se os dados foram inseridos caso 
    //contrário retorna erro
	if($ok){
		echo "Cadastrado com sucesso!!!";
	}else{
		echo "Não cadastrado!!!";
	}

	mysqli_close($conn);

?>

       


      
   
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