<?php
function transformString($string){

    $texto = explode(" ", strtolower($string));

    array_walk($texto, function(&$val) {
        $val = str_split($val);
        array_walk($val, function(&$_val, $_key) {
            $_val = 0 == $_key % 2 ? strtoupper($_val) : $_val;
        });
        $val = implode("", $val);
    });
 
    return implode(" ", $texto);
}
 
echo transformString("Texto mezclado");

?>