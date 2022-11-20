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

# Busca o valor inserido na pagina anterior $valor
# Imprime para o usuário uma tabuada completa multiplicado do 1 ao 10
# RECEBE VIA _POST o número a ser multiplicado

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


<!--  -->
	          <div align="center" > 
           <div class="col-xs-12 col-lg-6 form-login">

            <div class="col-md-12 toppen mt-5 mb-5">
              
        <h5 class="display-5">Bem Vindo(a)!</h5>
    </div>
            </div>


<div class="card" style="width: 45rem;">
  <img src="image/img9.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><span class="badge bg-dark"></span></h5>
  <div class="col-10">





	<h1 style="color:darkgreen;" class="display-6">Resultado</h1>
	<hr size=2 width=100%><br>


<?php

	 $tabuada = $_POST['valor']; //receber via $_POST['valor'] do html

	$k = 1;

	while($k <= 10)
	{
		print "<br>$tabuada x $k = ".($tabuada*$k); //Imprime o resultado com base no valor inserido
		$k++;
	}
	echo"<br><hr><br>";

?>


  </div>


	
<br><br>
	
	      <div align="center">
        <a class="btn btn-outline-success" href="index.php" role="button">Voltar</a>
      </div>
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


