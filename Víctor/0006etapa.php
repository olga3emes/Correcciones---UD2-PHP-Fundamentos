<?php

//! O_O ----> RIP Profe. 
 $edad = 10;

 if ($edad < 3){
    echo "Eres un bebe";

 }

 foreach (range(1,12) as $edad){
    echo "Ustes es un niño";
 }

 foreach (range(13,17) as $edad){
    echo "Usted es Adolescente";
 }

 foreach (range(18,66) as $edad){
    echo "Usted es Adulto";
 }

 if ($edad >= 67){
    echo "Eres Jubilao";
 }