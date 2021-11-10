<?php

  $edades = [3, 2, 12, 14, 13, 15];

  foreach ($edades as $edad) {
    if($edad < 5){
      echo "El estudiante con $edad tendrá sus juguetes en la parte inferior de la bodega\n";
    }
    elseif ($edad > 5 && $edad < 7){
      echo "El estudiante con $edad tendrá sus juguetes en la parte media de la bodega\n";
    } else{
      echo "El estudiante con $edad tendrá sus juguetes en la parte alta de la bodega\n";
    }
  }

  $altura = readline("Ingresa la altura del arbol: ");
  print("altura".' '.$altura."\n");
  $fila = '';

  for($i = 1; $i < $altura+1; $i++){
    $fila = $fila.'*';
    echo  $fila. "\n";
  }

?>