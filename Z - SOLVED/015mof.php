<?php 
    $array = [];
    for ($i=0; $i <= 100 ; $i++) { 
        rand(0,1) == 1 ? $array[$i]="M": $array[$i]="F"; 
    }
    print_r(array_count_values($array));
?>