<?php

namespace SRC;

class Funcoes
{ 
  public function SeculoAno(int $ano): int {
    define('duracaoSeculo', 100);
    $seculo = ($ano / duracaoSeculo);

    if(($ano % duracaoSeculo) != 0){
      return $seculo += 1;
    }

    return $seculo;
  }

  public function PrimoAnterior(int $numero): int {
    $comeco = 2;
    $i;
    $j;
    $ultimoPrimo;

    for($i = $comeco; $i < $numero; $i++){
      for($j = $comeco; $j < $i; $j++){
        if(($i % $j) == 0){
          break;
        }
      }
      if($i == $j){
        $ultimoPrimo = $i;
      }
    }
    
    return $ultimoPrimo;
  }

  public function SegundoMaior(array $arr): int {
    $maior = $arr[0][0];
    $ultimoMaior = 0;
    $linhas = count($arr);
    $colunas = count($arr[0]);

    for($i = 0; $i < $linhas; $i++){
      for($j = 0; $j < $colunas; $j++){
        if(($arr[$i][$j] < $maior) && ($arr[$i][$j] > $ultimoMaior)){
          $ultimoMaior = $arr[$i][$j];
        }else if ($arr[$i][$j] > $maior){
          $ultimoMaior = $maior;
          $maior = $arr[$i][$j];
        }
      }
    }
    
    return $ultimoMaior;
  }
	public function SequenciaCrescente(array $arr): bool {
    define('tamanhoMinimoArray', 2);
    define('quantidadeMaximaMenor', 1);
    $contaMenor = 0;
    $tamanhoArray = count($arr);
    
    if($tamanhoArray > tamanhoMinimoArray){
      for($i = 0; $i < $tamanhoArray-1; $i++){
        if(($arr[$i] >= $arr[$i + 1])){
          $contaMenor += 1;
        }
      }
      if($contaMenor > quantidadeMaximaMenor){
        return false;
      }
    }
    
    return true;
  }
}
