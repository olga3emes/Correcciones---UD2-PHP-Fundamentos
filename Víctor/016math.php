<?php
$array = range(0, 30);
foreach ($array as &$v) { //! Esto no lo hemos ni visto, innecesario.
    $v = rand(0, 100);
}
print_r($array);

//mayor 
max($array);

//menor
min($array);


//Media //! Leeeeeeee!!! Mide la media! array_sum($array)/count($array)
function mediana($array) {
    sort($array, SORT_NUMERIC); 
    $l=count($array);
    return $l%2==0
        ? array_sum(array_slice($array, ($l/2)-1, 2))/2
        : array_slice($array, $l/2, 1)[0];
}

?>