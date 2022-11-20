
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
 <table>
    <thead>
        <th>
            <tr>A</tr>
            <tr>*</tr>
            <tr>B</tr>
            <tr>=</tr>
            <tr>====</tr>
        </th>
    </thead>
    <tbody>
        
      
    <?php

$numero =$_GET["numero"];
for ($i=1; $i <=10 ; $i++) { 
    
    $resultado = $numero * $i;
    
    echo"<tr><td>$numero</td>
    <td>*</td>
    <td>$i</td>
    <td>=</td>
    <td>$resultado</td></tr>    ";
}

?>
       
    </tbody>
 </table>  







</body>
</html>