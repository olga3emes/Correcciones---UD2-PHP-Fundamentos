<!-- Genera un array aleatorio de 33 elementos con números 
comprendidos entre el 0 y 100 y calcula: El mayor, el menor y la media. -->
<?php
$elementos = [];
$suma = 0;
for ($i = 0; $i <= 33; $i++) {
    $random = rand(0, 100);
    $elementos[$i] = $random;
    $suma = $suma + $elementos[$i];
}
$media = $suma / 33;
echo "El numero mayor es " . max($elementos) . "<br>";
echo "El numero menor es " . min($elementos) . "<br>";
echo "La media es " . $media . "<br>";
?>