<?php

$inicio = $_GET['ini'];
$fin = $_GET['final'];

echo "<ul>";
for($i = $inicio; $i <= $fin; $i = $i+2){
    echo "<li>$i</li>";
}
echo "</ul>";

?>