

<?php 
/*005dinero.php: A partir de una cantidad de dinero, mostrar su 
descomposición en billetes (500, 200, 100, 50, 20, 10, 5) y monedas (2, 1), 
para que el número de elementos sea mínimo. No se utilizar ninguna 
instrucción condicional. Por ejemplo, al introducir 138 debe mostrar:1 billete de 100
0 billete de 50
1 billete de 20
1 billete de 10
1 billete de 5
1 moneda de 2
2 monedas de 1
Tip: Puedes forzar a realizar la división entera mediante la función 
intdiv($dividendo, $divisor) o pasar un número flotante a entero puedes 
usar la función intval(). */

$dinero =$_GET["dinero"];

//! Está OK: Faltan detalles, la otra solución la borro.

    $array =array(500,200,100,50,20,10,5,2,1);

    for ($i=0; $i <count($array) ; $i++) {

        $cantidad = intdiv( $dinero, $array[$i]);
        echo"la cantidad de billetes de $array[$i]es:$cantidad <br/>";
        $dinero= $dinero % $array[$i];

    }
    












?>
