<?php 
    include_once("018preparaTique.php");
    $tomates=getTomate();
    $platanos=getPlatanos();
    $manzanas=getManzanas();

    $eurosTomates= $tomates*1;
    $pesetasTomates= $tomates*166.386;

    $eurosPlatanos= $platanos*2;
    $pesetasPlatanos= $platanos*332.772;

    $eurosManzanas= $manzanas*3;
    $pesetasManzanas= $manzanas*499.158;

    print("<table>");
        print("<tr>");
            print("<th> Productos </th>");
            print("<th> Cantidad </th>");
            print("<th> Precio </th>");
        print("/<tr>");
        print("<tr>");
                print("<td>Tomates</td>");
                print("<td>$tomates</td>");
                print("<td> $eurosTomates €/$pesetasTomates pts</td>");
        print("/<tr>");
            print("<tr>");
            print("<td>Platanos</td>");
            print("<td>$platanos</td>");
            print("<td> $eurosPlatanos €/$pesetasPlatanos pts</td>");
        print("/<tr>");
        print("<tr>");
            print("<td>Manzanas</td>");
            print("<td>$manzanas</td>");
            print("<td> $eurosManzanas €/$pesetasManzanas pts</td>");
        print("/<tr>");
        print("<tr>");
            print("<td>TOTAL</td>");
            print("<td>".$manzanas+$platanos+$tomates."</td>");
            print("<td>" .$eurosManzanas+$eurosPlatanos+$eurosTomates. "€/".$pesetasManzanas+$pesetasPlatanos+$pesetasTomates. "pts</td>");
        print("/<tr>");
    print("</table>");
?>