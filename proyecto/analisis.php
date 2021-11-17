<?php

$palabras = array("sol", "luna", "cielo", "luz", "estrellas", "rapper", "school");

$i = 0;

while($i < count($palabras)){
  if ($_REQUEST["palabra$i"] == $palabras[$i]) {
    echo "la palabra ingresada es correcta"."<br>";
  } else {
    echo "la palabra ingresada es incorrecta, la correcta es " . $palabras[$i] ."<br>";
  }
  $i = $i + 1;
}

?>



