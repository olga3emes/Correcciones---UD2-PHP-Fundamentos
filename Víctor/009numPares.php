<?php

//! Y la lista desordenada?
for($n=2; $n<=50; $n= $n+2){
    if(($n%10) == 0){
        echo '<b>'.$n.'</b><br>';
    }else{
        echo $n."</br>";
    }
}

