<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php include("header.html");?>
        <form action="019listaCompra.php" method="post">
        <label label for="">Tomates (1€): </label>
        <input type="number" id="tomates" name="tomates"><br> <br>
        <label for="">Platanos (2€): </label>
        <input type="number" name="platanos"><br><br> 
        <label for="">Manzanas (3€): </label>
        <input type="number" name="manzanas"><br><br> 
        <input type="submit">
        <?php include("footer.html");?>
        </form>
</body>
</html>
<?php   
    function getTomate(){
        $tomates=$_POST["tomates"];
        return $tomates;
    }
    function getPlatanos(){
        $platanos=$_POST["platanos"];
        return $platanos;
    }
    function getManzanas(){
        $manzanas=$_POST["manzanas"];
        return $manzanas;
    }
?>