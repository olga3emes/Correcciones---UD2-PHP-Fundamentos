<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 6</title>
</head>
<body>
    <form>
        <p>
            <label for="edad">Edad: </label>
            <input type="number" name="edad" id="edad"/>
        </p>
    </form>

    <?php 
    $anyo = $_GET["edad"];

    //! hay que usar un switch
    if ($anyo < 3) {
        echo "Bebe";
    }else if($anyo >= 3 && $anyo <= 12){
        echo "Niño";
    }else if($anyo >= 13 && $anyo <= 17){
        echo "Adolescente";
    }else if($anyo >= 18 && $anyo <= 66){
        echo "Adulto";
    }else{
        echo "Jubilado";
    }
    ?>

</body>
</html>