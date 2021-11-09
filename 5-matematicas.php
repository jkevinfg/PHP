<?php
  $radios = [1,2,3,4,6,7,34,23];

  $minimo = min($radios);
  $maximo = max($radios);
  echo "$minimo \n";
  echo "$maximo \n";

  echo rand().''. "numero aleatorio\n"; #genera un numero aleatorio

  $radio = rand($minimo,$maximo); #numero aleatorio
  var_dump($radio);
  $area = pi() * $radio**2;
  echo $area . "\n";

  #raiz cuadrada
  echo sqrt(5);
?>