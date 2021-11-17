<?php
  $valorA = 10;

  if ($valorA == 10){
    echo "Es igual a 10";
  }else {
   echo "no es igual a 10";
  }

  $number = 10;
  while($number >= 0){
    echo "Quedan $number segundo(s)\n";
    $number--;
  }

  $number = 1 ;
  do {
    echo "$number Este numero es menor a 10\n";
    $number++;
  }while ($number < 10);

  $arr = array(1,2,3,4);
  for($i = 0 ; $i < 4 ; $i++){
    echo "$arr[$i]\n";
  }

  #for each -> solo opera sobre arrays y objetos
  foreach ($arr as $number){
    echo "$number\n";
  }

  $valorA = 6;

  switch($valorA) {
    case 1:
      echo "El valor es 1";
      break;
    case 2:
      echo "El valor es 2";
      break;
    case 3:
      echo "El valor es 3";
      break;
    default:
      echo "No es ninguno de los valores 1,2 o 3\n";
      break;
  }


?>