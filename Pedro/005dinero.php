<?php
$dinero = $_GET["dinero"];
$divisa = [500,200,100, 50, 20, 10, 5, 2, 1]; //! 500 y 200 OJO

for ($i = 0; $i < count($divisa); $i++) {
    $billetes = intdiv($dinero, $divisa[$i]);
    echo $billetes . " billetes de " . $divisa[$i] . "<br>"; //! plurales, monedas. Fullerillo.
    $dinero -= $billetes * $divisa[$i];
}
