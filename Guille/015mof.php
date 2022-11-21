<?php
$letras = array();

for($i = 0; $i < 100; $i++){
    if(rand(1, 2) == 1){
        $letras[] = "m";
    }else{
        $letras[] = "f";
    }
}

$contar = ["m" => 0, "f" => 0];

for($i = 0; $i < 100; $i++){
    if($letras[$i] == "m"){ //no entiendo por que sale error en la web
        //! porque es con [] --> inaceptable :( y la lógica mal también
        $contar["m"]++;
    }else{
        $contar["f"]++;
    }
}

echo "M = ". $contar["m"];
echo "<br> F = " .$contar["f"];
?>