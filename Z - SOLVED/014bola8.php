<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>014bola8.php</title>
    <?php 
        $pregunta = $_GET['pregunta'];
       
        $respuestas = array("Sí", "No", "Quizás", "Claro que sí", "Por supuesto que no", 
        "No lo tengo claro", "Seguro", "Yo diría que sí", "Ni de coña");
    ?>
</head>
<body>
    <h1>Pregunta:</h1>
    <h2><?= (strval($pregunta) or count($pregunta)>=10)? $pregunta: "La pregunta no es válida, pruebe de nuevo."?></h2>
    <h1>Respuesta:</h1>
    
    <h2><?=$respuestas[rand(0,sizeof($respuestas)-1)]?></h2>
</body>
</html>