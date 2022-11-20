<?php 
/*
Devuelve un valor lógico que indica si el valor especificado 
coincide con alguno de los valores con los que se lo compara
se utilizada para reemplazar el switch case
*/
/*
//Uso de expresiones match generalizadas para ramificar el contenido de strings.
$text = 'Bienvenue chez nous';

$result = match (true) {
    str_contains($text, 'Welcome') || str_contains($text, 'Hello') => 'en',
    str_contains($text, 'Bienvenue') || str_contains($text, 'Bonjour') => 'fr',

};

var_dump($result);

//Ejemplo de un patron default que este permit hacer coincidir cualquier cosa que no se haya hecho coincidir previamente
$expressionResult = match ($condition) {
    1, 2 => foo(),
    3, 4 => bar(),
    default => baz(),
};

//Un ejemplo de una estrucctura switch case utilizando MATCH
function days_in_month(string $month, $year): int
{
    return match(strtolower(substr($month, 0, 3))) {
        'apr', 'jun', 'sep',  'nov'  => 30,       
        'jan', 'mar', 'may', 'jul', 'aug',  'oct', 'dec'  => 31,
        'feb' => is_leap ($year) ? 29 : 28,
        default => throw new InvalidArgumentException("Bogus month"),
    };
}*/

//! Esto no compila con eso lo digo todo

?>