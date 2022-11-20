<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA</title>
</head>
<body>
    <form action="011tabla.php" method="post">
        <label for="">Número: </label>
        <input type="number" name="numero" id="numero"><br> <br>
        <input type="submit">
    </form>
    <?php
        $numero=count($_POST)>0 ? $_POST["numero"]: 0;
        //! no uses la forma antigua de PHP con los print, mejor los echo. Ya hemos visto el por qué de esto.
    print("<table>");
        print("<tr>");
            print("<th> A </th>");
            print("<th> *B= </th>");
            print("<th> A*B </th>");
        print("/<tr>");

        for($i=1;$i<=10;$i++){
            print("<tr>");
                print("<td>$numero</td>");
                print("<td> *$i= </td>");
                print("<td>" .$numero * $i. "</td>");
            print("/<tr>"); //! Si te fijas salen unas barras extrañas porque no cierras bien esta etiqueta.
        }
    print("</table>");
    ?>
</body>
</html>