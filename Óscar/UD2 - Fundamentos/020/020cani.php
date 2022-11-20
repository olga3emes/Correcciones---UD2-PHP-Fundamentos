<!-- EsCrIbE uNa FuNcIóN qUe TrAnSfOrMe UnA cAdEnA eN cAnI. -->

<?php
$frase = "esta cadena se va a convertir en cani";

echo PasarCani($frase);

function PasarCani($frase)
{

    $frase = strtolower($frase);
    $arr1 = str_split($frase);
    for ($i = 0; $i < count($arr1); $i++) {
        if ($i % 2 == 0) {
            $arr1[$i] = strtoupper($arr1[$i]);
        } else {
            $arr1[$i] = $arr1[$i];
        }
    }
    return implode("",$arr1);
}
?>