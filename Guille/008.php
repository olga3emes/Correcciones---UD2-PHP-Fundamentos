La instrucción match() actúa de forma parecida a un switch, pero compara si los valores son idénticos (===).<br>
Dentro de la función, la ejecución de un código no se realiza si hay pasos anteriores que no lo hacen antes, <br>
actúa como una especie de if(), que tiene que cumplir unos requisitos al ejecutarse, si no, pasa a un else if o else.<br>

<?php 
$edad = 43;

$resultado = match (true) { //! hay que evaluar una condición
    $edad >= 65 => print("Jubilado"),
    $edad >= 25 => print("Adulto"),
    $edad >= 18 => print("Adolescente"),
    default => print("Niño"),
}
?>