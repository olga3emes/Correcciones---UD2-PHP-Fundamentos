<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numPares</title>
</head>
<body>
    <form action="010numPares.php" method="post">
        <label for="">Nº inicio: </label>
        <input type="number" name="inicio"><br> <br>
        <label for="">Nº fin: </label>
        <input type="number" name="fin"><br><br>
        <input type="submit">
    </form>
</body>
</html>
<?php
    $inicio= $_POST["inicio"];
    $fin= $_POST["fin"];

    print("<ul>");
    for($i=$inicio;$i<=$fin;$i++){
        if($i%2==0){
            print("<li>$i</li>");
        }
    }
    print("</ul>");
?>