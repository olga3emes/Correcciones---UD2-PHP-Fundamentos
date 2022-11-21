<?php

$letras = ["M","F"];
$array[99] = []; //! LOCURAAAAAAAAAAAA X_X

for ($i=0; $i < 100; $i++) { 
    $array[$i] = $letras[rand(0,1)];  

}
print_r(array_count_values($array)); //ARRAY_COUBT_VALUES() CUENTA LOS VALORES DE UN ARRAY

  

?>