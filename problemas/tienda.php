<?php

$productos = array();
$cantidad = readline('Cuantos productos hay ?:');

for ($i = 0 ; $i<$cantidad ; $i++){
  $ancho = readline('El ancho del producto '.$i.':');
  $alto = readline('El alto del producto ' . $i . ':');
  $area = $ancho*$alto;
  $productos['producto'.$i] = $area;
}
print_r($productos);
//ordenar un array en PHP :
arsort($productos);

print_r($productos);

?>