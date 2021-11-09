<?php
/*
-A B | A and B
 V V     V

-A B | A ord B
 F F      F

-A B | A xor B
 V F      V
 F V      V
 F F      F
 V V      F
*/

  $valorA = false;
  $valorB = false;
  $valorc = true;


  $resultado = $valorA and $valorB;
  $resultado2 = $valorA or $valorB;
  $resultado3 = $valorA xor $valorB;


  $resultado4 = $valorA && $valorB;
  $resultado5 = $valorA || $valorB;

  var_dump($valorc);
  var_dump($resultado);
  var_dump($resultado2);
  var_dump($resultado3);
  var_dump($resultado5);


?>