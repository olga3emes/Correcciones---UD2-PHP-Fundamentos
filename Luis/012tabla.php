<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$fila =$_GET["fila"];
$columna =$_GET["columna"];
    ?>
    <table>


    <?php 



for ($i=0; $i <$fila ; $i++) {
    echo"<tr></tr>";
    
    for ($n=0; $n <$columna ; $n++) { 
        
        echo"<td>$i $n</td>";
    }
 
}
?>


    </table>
</body>
</html>

