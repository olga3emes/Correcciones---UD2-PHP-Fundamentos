<?php
    $array[99]=[];
    for($i=0;$i<100;$i++){
        $asignador=rand(0,1);
        if($asignador==0){
            $array[$i]="H";
        }else{
            $array[$i]="M";
        }

    }
    print_r(array_count_values($array));
            
?>