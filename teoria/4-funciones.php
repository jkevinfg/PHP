<?php
  $name = "Jair";
  $lastName = "Flores";

  function concatenar($name,$lastName){
    $fullname = $name.''.$lastName;
    return $fullname;
  }
  echo  concatenar($name,$lastName);

  function sumNumbers($numbersArray){
    $sum = 0;
    $arrayLength = count($numbersArray);
    for($i = 0 ; $i<$arrayLength ; $i++){
      $sum = $sum + $numbersArray[$i];
    }
    return $sum;
  }
  echo sumNumbers([1,2,3,4]);


  // is_array -> sirve para ver si es array
  $names = ['kevin','juan','diego'];
  var_dump(is_array($names));


?>