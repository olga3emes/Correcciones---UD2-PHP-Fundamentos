<?php

function generaPassw(int $lon)
{
    $res = "";
    for ($i = 0; $i < $lon; $i++) {
        $ascii = chr(rand(48,122));
        while (!preg_match("/\w/", $ascii)) { //! totalmente innecesario. Demasidas conversiones.
            $ascii = chr(rand());
        }
        $res = $res . $ascii;
    }
    return $res;
}

echo generaPassw(9);