<?php
  include('Funcoes.php');
  $teste = new Funcoes;
  // testando a funcao SeculoAno com os valores dados para teste
  //echo $teste->SeculoAno(1905);
  //echo $teste->SeculoAno(1700);
 
  // testando a funcao PrimoAnteior com os valores dados para teste
  //echo $teste->PrimoAnterior(10);
  //echo $teste->PrimoAnterior(29);

  //  testando a funcao PrimoAnteior com o array dado para teste
  
  $multidimensional = array (
    array(25,22,18),
    array(10,15,13),
    array(24,5,2),
    array(80,17,15)
  );

  //echo $teste->SegundoMaior($multidimensional);
  $sequencia = array (1, 2, 1, 2);

  echo $teste->SequenciaCrescente($sequencia);