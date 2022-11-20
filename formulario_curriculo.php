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


<!-- FORMULARIO UTILIZADO PARA CRIAÇÃO OTIMIZADA DE CURRICULO

O usuário irá inserir as informações e ela será impressa na página  curriculo.php
 -->

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


	<form action="curriculo.php" method="POST">



	<h1 style="color:darkgreen;" class="display-6">Dados Pessoais</h1>
	<hr size=2 width=100%><br>

	  <div class="form-group">
    <label for="exampleFormControlInput1"><h6>Nome</h6></label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Nome completo">
  </div>


  		<h6>Sexo:</h6>

	<input type="radio" class="form-check-input" name="sexo" value="Feminino"> Feminino<p> 
	<input type="radio" class="form-check-input" name="sexo" value="Masculino">Masculino<p>


	<h6>Estado Civil:</h6>


	<input type="radio" class="form-check-input" name="estcivil" value="Solteiro">Solteiro(a)<br>
	<input type="radio" class="form-check-input" name="estcivil" value="Casado">Casado(a)<br>
	<input type="radio" class="form-check-input" name="estcivil" value="Viuvo">Viuvo(a) 
	
	<br><br>


	  <div class="form-group">
    <label for="exampleFormControlInput1"><h6>Nacionalidade</h6></label>
    <input type="text" name="nacio" class="form-control" id="exampleFormControlInput1" placeholder="Nacionalidade">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1"><h6>Data de nascimento</h6></label>
    <input type="date" name="dtnas" class="form-control" id="exampleFormControlInput1" placeholder="Data de Nascimento">
  </div>
	
  <div class="form-group">
    <label for="exampleFormControlInput1"><h6>Idade</h6></label>
    <input type="number" name="idade" class="form-control" id="exampleFormControlInput1" placeholder="Idade">
  </div>
	
	  <div class="form-group">
    <label for="exampleFormControlInput1"><h6>Telefone</h6></label>
    <input type="text" name="tel" class="form-control" id="exampleFormControlInput1" placeholder="ou Celular">
  </div>
	

	



	
	  <div class="form-group">
    <label for="exampleFormControlInput1"><h6>E-mail</h6></label>
    <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="seuemail@email.com">
  </div>
	

    <div class="form-group">
    <label for="exampleFormControlInput1"><h6>Endereço</h6></label>
    <input type="text" name="end" class="form-control" id="exampleFormControlInput1" placeholder="Nome da Rua, n°, Bairro">
  </div>

    <div class="form-group">
    <label for="exampleFormControlInput1"><h6>Cidade</h6></label>
    <input type="text" name="city" class="form-control" id="exampleFormControlInput1" placeholder="Cidade">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1"><h6>Estado</h6></label>
    <select class="form-control" id="exampleFormControlSelect1" name="estado">
    <OPTION VALUE="AC"> AC </OPTION>
	<OPTION VALUE="AL"> AL </OPTION>
	<OPTION VALUE="AP"> AP </OPTION>
	<OPTION VALUE="AM"> AM </OPTION>
	<OPTION VALUE="BA"> BA </OPTION>
	<OPTION VALUE="CE"> CE </OPTION>
	<OPTION VALUE="DF"> DF </OPTION>
	<OPTION VALUE="ES"> ES </OPTION>
	<OPTION VALUE="GO"> GO </OPTION>
	<OPTION VALUE="MA"> MA </OPTION>
	<OPTION VALUE="MT"> MT </OPTION>
	<OPTION VALUE="MS"> MS </OPTION>
	<OPTION VALUE="MG"> MG </OPTION>
	<OPTION VALUE="PA"> PA </OPTION>
	<OPTION VALUE="PB"> PB </OPTION>
	<OPTION VALUE="PR"> PR </OPTION>
	<OPTION VALUE="PE"> PE </OPTION>
	<OPTION VALUE="PI"> PI </OPTION>
	<OPTION VALUE="RJ"> RJ </OPTION>
	<OPTION VALUE="RN"> RN </OPTION>
	<OPTION VALUE="RS"> RS </OPTION>
	<OPTION VALUE="RO"> RO </OPTION>
	<OPTION VALUE="RR"> RR </OPTION>
	<OPTION VALUE="SC"> SC </OPTION>
	<OPTION VALUE="SP"> SP </OPTION>
	<OPTION VALUE="SE"> SE </OPTION>
	<OPTION VALUE="TO"> TO </OPTION>
    </select>
  </div>
	

<h1 style="color:darkgreen;" class="display-6">Formação</h1>
	
<hr size=2 width=100%><br>
	
	 <div class="form-group">
    <label for="exampleFormControlSelect1"><h6>Escolaridade</h6> </label>
    <select class="form-control" id="exampleFormControlSelect1" name="escolaridade">
<option value="Educação Infantil"> Educação Infantil </option>
		<option value="Ensino Fundamental"> Ensino Fundamental </option>
		<option value="Ensino Medio"> Ensino Médio </option>
		<option value="Ensino Superior"> Ensino Superior </option>
    </select>
  </div>
  	<input type="radio" class="form-check-input" name="ensino" value="Completo">Completo<br> 
		<input type="radio" class="form-check-input" name="ensino" value="Incompleto">Incompleto

	
		<br><br> 
		
	 <div class="form-group">
    <label for="exampleFormControlSelect1"><h6>Cursos?</h6> </label>
        <input type="text" name="curso" class="form-control" id="exampleFormControlInput1" >
          	<input type="radio" class="form-check-input" name="cursoSN" value="Completo">Completo<br> 
		<input type="radio" class="form-check-input" name="cursoSN" value="Incompleto">Incompleto

  </div>


	

	<h1 style="color:darkgreen;" class="display-6">Experiência em T.I?</h1>
	<hr size=2 width=100%>
	

	<input type="radio" class="form-check-input" name="exp" value="Sim">Sim<br> 
	<input type="radio" class="form-check-input" name="exp" value="Não">Não
	<br>
	
<br><br>
	
	<INPUT TYPE="SUBMIT" VALUE="GERAR" class="btn btn-dark">
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