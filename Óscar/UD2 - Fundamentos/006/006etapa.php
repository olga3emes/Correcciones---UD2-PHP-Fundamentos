<!-- 006etapa.php: A partir de una edad muestra por pantalla:
bebé si tiene menos de 3 años
niño si tiene entre 3 y 12 años
adolescente entre 13 y 17 años
adulto entre 18 y 66
jubilado a partir de 67 -->

<?php 
$edad = $_GET["edad"];
//! Te falta controlar los negativos, mejor con un switch...
if ($edad < 3) {
    echo "Eres un bebé";
}
else if($edad >= 3 && $edad <= 12){
    echo "Eres un niño";
}
else if($edad >= 13 && $edad <= 17){
    echo "Eres un adolescente";
}
else if($edad >= 18 && $edad <= 66){
    echo "Eres un adulto";
}
else if($edad >= 67){
    echo "Eres un jubilado";
}
?>