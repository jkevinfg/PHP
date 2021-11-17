
<?php
/*
Realize un programa que primero pida la cantidad de productos en una tienda
luego empiece a digitar el precio de cada uno de estos, para luego elegir
el descuento a aplicar. Mostrar por pantalla la lista de nuevos precios,
el mayor y el menor precio.
*/

function main (){
  $productos = array();
  $cantidad = readline('Cuantos productos hay en la tienda ?');

  for ($i = 0; $i < $cantidad; $i++) {
    $precio = readline('Precio del producto' . $i . ':');
    $productos['producto' . $i] = $precio;
  }

  $porcentaje = readline('Cual es el porcentaje que le quiere aplicar a los productos :');

  for($i = 0 ; $i < count($productos); $i++){
    $precio = $productos['producto' . $i];
    $productos['producto' . $i] = newPrecioProducto($porcentaje, $precio);
  }

  print_r($productos);
}

function newPrecioProducto($porcentaje, $precio){
  $newprecio =  ($precio * (100-$porcentaje))/100;
  return $newprecio;
}

main();

?>