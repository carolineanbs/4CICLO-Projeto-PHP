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

# Página utilizada com o objetivo de descrever uma tabela nutricional
# utilizando classes/heranças
# Framework utilizada: Boostrap
# Impressão dos valores em tabela



ini_set('default_charset', 'UTF-8');

// -------------------------------------------------------------//

    class Foods extends Fruits {
      public function setNome($nome){
    $this -> nome = $nome;
  }
  public function getNome(){
    return $this -> nome;
  }
  public function setCaloria($caloria){
    $this -> caloria = $caloria;
  }
  public function getCaloria(){
    return $this -> caloria;
  }
  public function setGlicidios($glicidios){
      $this -> glicidios = $glicidios;
    }
    public function getGlicidios(){
      return $this -> glicidios;
    }
        public function setProteinas($proteinas) {
        $this -> proteinas = $proteinas;
        } 
    public function getProteinas(){
      return $this -> proteinas;
      }
        public function setLipidios($lipidios){
    $this -> lipidios = $lipidios;
  }
    public function getLipidios(){
      return $this -> lipidios;
    }
    
    public function setCalcio($calcio) {
        $this -> calcio = $calcio;
      } 
    public function getCalcio(){
      return $this -> calcio;
    }
    public function setFosforo($fosforo) {
        $this -> fosforo = $fosforo;
      } 
    public function getFosforo(){
      return $this -> fosforo;
    }
    public function setFerro($ferro) {
        $this -> ferro = $ferro;
      } 
    public function getFerro(){
      return $this -> ferro;
    }
}

// -------------------------------------------------------------//

    class Fruits {
        private $nome;
          private $caloria;
          private $glicidios;
          private $proteinas;
          private $lipidios;
          private $calcio;
          private $fosforo;
          private $ferro;
              }
// -------------------------------------------------------------//

?>

<?php

  include 'navbar.php';

// INCLUDE

?>

<!DOCTYPE html>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <title>Tabela Nutricional das Frutas</title>
  </head>
    <body>



 <?php
// -------------------------------------------------------------//
$fruit4 = new Foods();

$fruit4 -> setNome('Abacate');
$fruit4 -> setCaloria('162');
$fruit4 -> setGlicidios('6,4');
$fruit4 -> setProteinas('1,8');
$fruit4 -> setLipidios('16');
$fruit4 -> setCalcio('13');
$fruit4 -> setFosforo('47');
$fruit4 -> setFerro('0,7');


// -------------------------------------------------------------//
$fruit3 = new Foods();



$fruit3 -> setNome('Abacaxi');
$fruit3 -> setCaloria('52');
$fruit3 -> setGlicidios('13,7');
$fruit3 -> setProteinas('0,4');
$fruit3 -> setLipidios('0,2');
$fruit3 -> setCalcio('18');
$fruit3 -> setFosforo('8');
$fruit3 -> setFerro('0,5');

// -------------------------------------------------------------//
$fruit2 = new Foods();



$fruit2 -> setNome('Açaí');
$fruit2 -> setCaloria('247');
$fruit2 -> setGlicidios('36,6');
$fruit2 -> setProteinas('3,8');
$fruit2 -> setLipidios('12,2');
$fruit2 -> setCalcio('118');
$fruit2 -> setFosforo('0,5');
$fruit2 -> setFerro('11,8');

// -------------------------------------------------------------//
$fruit1 = new Foods();



$fruit1 -> setNome('Banana');
$fruit1 -> setCaloria('89');
$fruit1 -> setGlicidios('22,8');
$fruit1 -> setProteinas('1,3');
$fruit1 -> setLipidios('0,3');
$fruit1 -> setCalcio('15');
$fruit1 -> setFosforo('25');
$fruit1 -> setFerro('0,2');

// -------------------------------------------------------------//
$fruit5 = new Foods();



$fruit5 -> setNome('Cacau');
$fruit5 -> setCaloria('562');
$fruit5 -> setGlicidios('1,5');
$fruit5 -> setProteinas('21,8');
$fruit5 -> setLipidios('52,1');
$fruit5 -> setCalcio('120');
$fruit5 -> setFosforo('72');
$fruit5 -> setFerro('3');

// -------------------------------------------------------------//
$fruit6 = new Foods();



$fruit6 -> setNome('Cajá');
$fruit6 -> setCaloria('46');
$fruit6 -> setGlicidios('11,6');
$fruit6 -> setProteinas('0,8');
$fruit6 -> setLipidios('0,2');
$fruit6 -> setCalcio('56');
$fruit6 -> setFosforo('37');
$fruit6 -> setFerro('0,3');

// -------------------------------------------------------------//
$fruit7 = new Foods();



$fruit7 -> setNome('Caju');
$fruit7 -> setCaloria('36,5');
$fruit7 -> setGlicidios('8,4');
$fruit7 -> setProteinas('0,8');
$fruit7 -> setLipidios('0,2');
$fruit7 -> setCalcio('50');
$fruit7 -> setFosforo('18');
$fruit7 -> setFerro('1');

// -------------------------------------------------------------//

$fruit9 = new Foods();



$fruit9 -> setNome('Cupuaçu');
$fruit9 -> setCaloria('72');
$fruit9 -> setGlicidios('14,7');
$fruit9 -> setProteinas('1,7');
$fruit9 -> setLipidios('1,6');
$fruit9 -> setCalcio('23');
$fruit9 -> setFosforo('26');
$fruit9 -> setFerro('2,6');

// -------------------------------------------------------------//

$fruit10 = new Foods();



$fruit10 -> setNome('Goiaba');
$fruit10 -> setCaloria('42,5');
$fruit10 -> setGlicidios('9,5');
$fruit10 -> setProteinas('0,9');
$fruit10 -> setLipidios('0,1');
$fruit10 -> setCalcio('17');
$fruit10 -> setFosforo('30');
$fruit10 -> setFerro('0,7');

// -------------------------------------------------------------//

$fruit11 = new Foods();



$fruit11 -> setNome('Graviola');
$fruit11 -> setCaloria('60');
$fruit11 -> setGlicidios('14,9');
$fruit11 -> setProteinas('1,1');
$fruit11 -> setLipidios('0,4');
$fruit11 -> setCalcio('24');
$fruit11 -> setFosforo('28');
$fruit11 -> setFerro('0,5');

// -------------------------------------------------------------//

$fruit12 = new Foods();



$fruit12 -> setNome('Laranja');
$fruit12 -> setCaloria('45,5');
$fruit12 -> setGlicidios('9,8');
$fruit12 -> setProteinas('0,6');
$fruit12 -> setLipidios('0,4');
$fruit12 -> setCalcio('45');
$fruit12 -> setFosforo('21');
$fruit12 -> setFerro('0,2');

// -------------------------------------------------------------//

$fruit13 = new Foods();



$fruit13 -> setNome('Uva');
$fruit13 -> setCaloria('78');
$fruit13 -> setGlicidios('14,9');
$fruit13 -> setProteinas('1,4');
$fruit13 -> setLipidios('1,4');
$fruit13 -> setCalcio('19');
$fruit13 -> setFosforo('35');
$fruit13 -> setFerro('0,7');

// -------------------------------------------------------------//

$fruit14 = new Foods();



$fruit14 -> setNome('Umbu');
$fruit14 -> setCaloria('44');
$fruit14 -> setGlicidios('10,6');
$fruit14 -> setProteinas('0,6');
$fruit14 -> setLipidios('0,4');
$fruit14 -> setCalcio('20');
$fruit14 -> setFosforo('14');
$fruit14 -> setFerro('2');

// -------------------------------------------------------------//

$fruit15 = new Foods();



$fruit15 -> setNome('Morango');
$fruit15 -> setCaloria('39');
$fruit15 -> setGlicidios('7,4');
$fruit15 -> setProteinas('1');
$fruit15 -> setLipidios('0,6');
$fruit15 -> setCalcio('22');
$fruit15 -> setFosforo('22');
$fruit15 -> setFerro('0,9');

// -------------------------------------------------------------//

$fruit16 = new Foods();



$fruit16 -> setNome('Melão');
$fruit16 -> setCaloria('29,9');
$fruit16 -> setGlicidios('6,35');
$fruit16 -> setProteinas('0,84');
$fruit16 -> setLipidios('0,13');
$fruit16 -> setCalcio('17');
$fruit16 -> setFosforo('0,16');
$fruit16 -> setFerro('0,4');

// -------------------------------------------------------------//

$fruit17 = new Foods();



$fruit17 -> setNome('Melancia');
$fruit17 -> setCaloria('31');
$fruit17 -> setGlicidios('6,9');
$fruit17 -> setProteinas('0,5');
$fruit17 -> setLipidios('0,2');
$fruit17 -> setCalcio('7');
$fruit17 -> setFosforo('12');
$fruit17 -> setFerro('0,23');

// -------------------------------------------------------------//

$fruit18 = new Foods();



$fruit18 -> setNome('Marcujá');
$fruit18 -> setCaloria('90');
$fruit18 -> setGlicidios('21,2');
$fruit18 -> setProteinas('2,2');
$fruit18 -> setLipidios('0,7');
$fruit18 -> setCalcio('13');
$fruit18 -> setFosforo('17');
$fruit18 -> setFerro('1,6');

// -------------------------------------------------------------//

$fruit19 = new Foods();



$fruit19 -> setNome('Mamão');
$fruit19 -> setCaloria('68');
$fruit19 -> setGlicidios('14,5');
$fruit19 -> setProteinas('0,2');
$fruit19 -> setLipidios('1');
$fruit19 -> setCalcio('21');
$fruit19 -> setFosforo('26');
$fruit19 -> setFerro('0,3');

// -------------------------------------------------------------//

$fruit20 = new Foods();



$fruit20 -> setNome('Maçã');
$fruit20 -> setCaloria('63,2');
$fruit20 -> setGlicidios('14,2');
$fruit20 -> setProteinas('0,4');
$fruit20 -> setLipidios('0,5');
$fruit20 -> setCalcio('7');
$fruit20 -> setFosforo('12');
$fruit20 -> setFerro('0,3');


// echo


 ?>

      <div align="center">

 
 <div class="alert alert-dark" role="alert">
 <h1 class="display-6">Tabela Nutricional das Frutas</h1>
</div>
</div>



<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Caloria(K/cal)</th>
      <th scope="col">Glicídios(g)</th>
      <th scope="col">Proteínas(g)</th>
      <th scope="col">Lípídios(g)</th>
      <th scope="col">Cálcio(mg)</th>
      <th scope="col">Fósforo(mg)</th>
      <th scope="col">Ferro(mg)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php
echo  $fruit4 -> getNome();  ?></td>
      <td><?php
echo  $fruit4 -> getCaloria();  ?></td>
      <td><?php
echo  $fruit4 -> getGlicidios();  ?></td>
      <td><?php
echo  $fruit4 -> getProteinas();  ?></td>
      <td><?php
echo  $fruit4 -> getLipidios();  ?></td>
       <td><?php
echo  $fruit4 -> getCalcio();  ?></td>
<td><?php
echo  $fruit4 -> getFosforo();  ?></td>
<td><?php
echo  $fruit4 -> getFerro();  ?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><?php
echo  $fruit3 -> getNome();  ?></td>
            <td><?php
echo  $fruit3 -> getCaloria();  ?></td>
      <td><?php
echo  $fruit3 -> getGlicidios();  ?></td>
      <td><?php
echo  $fruit3 -> getProteinas();  ?></td>
      <td><?php
echo  $fruit3 -> getLipidios();  ?></td>
       <td><?php
echo  $fruit3 -> getCalcio();  ?></td>
<td><?php
echo  $fruit3 -> getFosforo();  ?></td>
<td><?php
echo  $fruit3 -> getFerro();  ?></td>
    </tr>
    <tr>
<th scope="row">3</th>
      <td><?php
echo  $fruit2 -> getNome();  ?></td>
            <td><?php
echo  $fruit2 -> getCaloria();  ?></td>
      <td><?php
echo  $fruit2 -> getGlicidios();  ?></td>
      <td><?php
echo  $fruit2 -> getProteinas();  ?></td>
      <td><?php
echo  $fruit2 -> getLipidios();  ?></td>
       <td><?php
echo  $fruit2 -> getCalcio();  ?></td>
<td><?php
echo  $fruit2 -> getFosforo();  ?></td>
<td><?php
echo  $fruit2 -> getFerro();  ?></td>
    </tr>
    <th scope="row">4</th>
      <td><?php
echo  $fruit5 -> getNome();  ?></td>
            <td><?php
echo  $fruit5 -> getCaloria();  ?></td>
      <td><?php
echo  $fruit5 -> getGlicidios();  ?></td>
      <td><?php
echo  $fruit5 -> getProteinas();  ?></td>
      <td><?php
echo  $fruit5 -> getLipidios();  ?></td>
       <td><?php
echo  $fruit5 -> getCalcio();  ?></td>
<td><?php
echo  $fruit5 -> getFosforo();  ?></td>
<td><?php
echo  $fruit5 -> getFerro();  ?></td>
    </tr>
    <th scope="row">5</th>
      <td><?php
echo  $fruit6 -> getNome();  ?></td>
            <td><?php
echo  $fruit6 -> getCaloria();  ?></td>
      <td><?php
echo  $fruit6 -> getGlicidios();  ?></td>
      <td><?php
echo  $fruit6 -> getProteinas();  ?></td>
      <td><?php
echo  $fruit6 -> getLipidios();  ?></td>
       <td><?php
echo  $fruit6 -> getCalcio();  ?></td>
<td><?php
echo  $fruit6 -> getFosforo();  ?></td>
<td><?php
echo  $fruit6 -> getFerro();  ?></td>
    </tr>
    <th scope="row">6</th>
      <td><?php
echo  $fruit7 -> getNome();  ?></td>
            <td><?php
echo  $fruit7 -> getCaloria();  ?></td>
      <td><?php
echo  $fruit7 -> getGlicidios();  ?></td>
      <td><?php
echo  $fruit7 -> getProteinas();  ?></td>
      <td><?php
echo  $fruit7 -> getLipidios();  ?></td>
       <td><?php
echo  $fruit7 -> getCalcio();  ?></td>
<td><?php
echo  $fruit7 -> getFosforo();  ?></td>
<td><?php
echo  $fruit7 -> getFerro();  ?></td>
    </tr>
    <th scope="row">7</th>
      <td><?php
echo  $fruit9 -> getNome();  ?></td>
            <td><?php
echo  $fruit9 -> getCaloria();  ?></td>
      <td><?php
echo  $fruit9 -> getGlicidios();  ?></td>
      <td><?php
echo  $fruit9 -> getProteinas();  ?></td>
      <td><?php
echo  $fruit9 -> getLipidios();  ?></td>
       <td><?php
echo  $fruit9 -> getCalcio();  ?></td>
<td><?php
echo  $fruit9 -> getFosforo();  ?></td>
<td><?php
echo  $fruit9 -> getFerro();  ?></td>
    </tr>
    <th scope="row">8</th>
      <td><?php
echo  $fruit10 -> getNome();  ?></td>
            <td><?php
echo  $fruit10 -> getCaloria();  ?></td>
      <td><?php
echo  $fruit10 -> getGlicidios();  ?></td>
      <td><?php
echo  $fruit10 -> getProteinas();  ?></td>
      <td><?php
echo  $fruit10 -> getLipidios();  ?></td>
       <td><?php
echo  $fruit10 -> getCalcio();  ?></td>
<td><?php
echo  $fruit10 -> getFosforo();  ?></td>
<td><?php
echo  $fruit10 -> getFerro();  ?></td>
    </tr>
    <th scope="row">9</th>
      <td><?php
echo  $fruit11 -> getNome();  ?></td>
            <td><?php
echo  $fruit11 -> getCaloria();  ?></td>
      <td><?php
echo  $fruit11 -> getGlicidios();  ?></td>
      <td><?php
echo  $fruit11 -> getProteinas();  ?></td>
      <td><?php
echo  $fruit11 -> getLipidios();  ?></td>
       <td><?php
echo  $fruit11 -> getCalcio();  ?></td>
<td><?php
echo  $fruit11 -> getFosforo();  ?></td>
<td><?php
echo  $fruit11 -> getFerro();  ?></td>
    </tr>
    <th scope="row">10</th>
      <td><?php
echo  $fruit12 -> getNome();  ?></td>
            <td><?php
echo  $fruit12 -> getCaloria();  ?></td>
      <td><?php
echo  $fruit12 -> getGlicidios();  ?></td>
      <td><?php
echo  $fruit12 -> getProteinas();  ?></td>
      <td><?php
echo  $fruit12 -> getLipidios();  ?></td>
       <td><?php
echo  $fruit12 -> getCalcio();  ?></td>
<td><?php
echo  $fruit12 -> getFosforo();  ?></td>
<td><?php
echo  $fruit12 -> getFerro();  ?></td>
    </tr>
        <th scope="row">11</th>
      <td><?php
echo  $fruit13 -> getNome();  ?></td>
            <td><?php
echo  $fruit13 -> getCaloria();  ?></td>
      <td><?php
echo  $fruit13 -> getGlicidios();  ?></td>
      <td><?php
echo  $fruit13 -> getProteinas();  ?></td>
      <td><?php
echo  $fruit13 -> getLipidios();  ?></td>
       <td><?php
echo  $fruit13 -> getCalcio();  ?></td>
<td><?php
echo  $fruit13 -> getFosforo();  ?></td>
<td><?php
echo  $fruit13 -> getFerro();  ?></td>
    </tr>
        <th scope="row">12</th>
      <td><?php
echo  $fruit14 -> getNome();  ?></td>
            <td><?php
echo  $fruit14 -> getCaloria();  ?></td>
      <td><?php
echo  $fruit14 -> getGlicidios();  ?></td>
      <td><?php
echo  $fruit14 -> getProteinas();  ?></td>
      <td><?php
echo  $fruit14 -> getLipidios();  ?></td>
       <td><?php
echo  $fruit14 -> getCalcio();  ?></td>
<td><?php
echo  $fruit14 -> getFosforo();  ?></td>
<td><?php
echo  $fruit14 -> getFerro();  ?></td>
    </tr>
        <th scope="row">13</th>
      <td><?php
echo  $fruit15 -> getNome();  ?></td>
            <td><?php
echo  $fruit15 -> getCaloria();  ?></td>
      <td><?php
echo  $fruit15 -> getGlicidios();  ?></td>
      <td><?php
echo  $fruit15 -> getProteinas();  ?></td>
      <td><?php
echo  $fruit15 -> getLipidios();  ?></td>
       <td><?php
echo  $fruit15 -> getCalcio();  ?></td>
<td><?php
echo  $fruit15 -> getFosforo();  ?></td>
<td><?php
echo  $fruit15 -> getFerro();  ?></td>
    </tr>
        <th scope="row">14</th>
      <td><?php
echo  $fruit16 -> getNome();  ?></td>
            <td><?php
echo  $fruit16 -> getCaloria();  ?></td>
      <td><?php
echo  $fruit16 -> getGlicidios();  ?></td>
      <td><?php
echo  $fruit16 -> getProteinas();  ?></td>
      <td><?php
echo  $fruit16 -> getLipidios();  ?></td>
       <td><?php
echo  $fruit16 -> getCalcio();  ?></td>
<td><?php
echo  $fruit16 -> getFosforo();  ?></td>
<td><?php
echo  $fruit16 -> getFerro();  ?></td>
    </tr>
        <th scope="row">15</th>
      <td><?php
echo  $fruit17 -> getNome();  ?></td>
            <td><?php
echo  $fruit17 -> getCaloria();  ?></td>
      <td><?php
echo  $fruit17 -> getGlicidios();  ?></td>
      <td><?php
echo  $fruit17 -> getProteinas();  ?></td>
      <td><?php
echo  $fruit17 -> getLipidios();  ?></td>
       <td><?php
echo  $fruit17 -> getCalcio();  ?></td>
<td><?php
echo  $fruit17 -> getFosforo();  ?></td>
<td><?php
echo  $fruit17 -> getFerro();  ?></td>
    </tr>
        <th scope="row">16</th>
      <td><?php
echo  $fruit18 -> getNome();  ?></td>
            <td><?php
echo  $fruit18 -> getCaloria();  ?></td>
      <td><?php
echo  $fruit18 -> getGlicidios();  ?></td>
      <td><?php
echo  $fruit18 -> getProteinas();  ?></td>
      <td><?php
echo  $fruit18 -> getLipidios();  ?></td>
       <td><?php
echo  $fruit18 -> getCalcio();  ?></td>
<td><?php
echo  $fruit18 -> getFosforo();  ?></td>
<td><?php
echo  $fruit18 -> getFerro();  ?></td>
    </tr>
        <th scope="row">17</th>
      <td><?php
echo  $fruit19 -> getNome();  ?></td>
            <td><?php
echo  $fruit19 -> getCaloria();  ?></td>
      <td><?php
echo  $fruit19 -> getGlicidios();  ?></td>
      <td><?php
echo  $fruit19 -> getProteinas();  ?></td>
      <td><?php
echo  $fruit19 -> getLipidios();  ?></td>
       <td><?php
echo  $fruit19 -> getCalcio();  ?></td>
<td><?php
echo  $fruit19 -> getFosforo();  ?></td>
<td><?php
echo  $fruit19 -> getFerro();  ?></td>
    </tr>
            <th scope="row">18</th>
      <td><?php
echo  $fruit20 -> getNome();  ?></td>
            <td><?php
echo  $fruit20 -> getCaloria();  ?></td>
      <td><?php
echo  $fruit20 -> getGlicidios();  ?></td>
      <td><?php
echo  $fruit20 -> getProteinas();  ?></td>
      <td><?php
echo  $fruit20 -> getLipidios();  ?></td>
       <td><?php
echo  $fruit20 -> getCalcio();  ?></td>
<td><?php
echo  $fruit20 -> getFosforo();  ?></td>
<td><?php
echo  $fruit20 -> getFerro();  ?></td>
    </tr>
  </tbody>
</table>
</div> 



<div align="center">
 <div class="col-6"
 
<ul class="list-group">
  <li class="list-group-item list-group-item-dark"><h6>Principais beneficios</h6>  </li>

  <li class="list-group-item"> <h6>Reduz o risco de desenvolver doenças</h6> </li>
  <li class="list-group-item"> <h6>Antioxidantes que combatem os radicais livres</h6>  </li>
  <li class="list-group-item"> <h6>Rica em fibras</h6> </li>
  <li class="list-group-item"> <h6>Rica em nutrientes e fornece vitaminas e minerais</h6> </li>
  <li class="list-group-item"> <h6>Mantêm seu sistema digestivo funcionando bem</h6> </li>
</ul>
</div>
 


 </div>
 <br><br>




</body>
</html>


<?php

  include 'rodape.php';

// INCLUDE

?>