<?php 
    include_once("019preparaCompra.php");
    $tomates=getTomate();
    $platanos=getPlatanos();
    $manzanas=getManzanas();

    $eurosTomates= $tomates*1;
    $pesetasTomates= $tomates*166.386;

    $eurosPlatanos= $platanos*2;
    $pesetasPlatanos= $platanos*332.772;

    $eurosManzanas= $manzanas*3;
    $pesetasManzanas= $manzanas*499.158;

    print("<ul>");
        print("<li>");
                print("Tomates ---->");
                print(" $eurosTomates €/$pesetasTomates pts");
        print("/<li>");

            print("Platanos ---->");
            print("$eurosPlatanos €/$pesetasPlatanos pts");
        print("/<li>");
            print("Manzanas ---->");
            print("$eurosManzanas €/$pesetasManzanas pts");
        print("/<li>");
            print("TOTAL ---->");
            print("$manzanas+$platanos+$tomates");
            print("$eurosManzanas+$eurosPlatanos+$eurosTomates");print("€/");("$pesetasManzanas+$pesetasPlatanos+$pesetasTomates pts");

    print("</ul>");
?>