<?php 

    $num = $_GET["number"];
    $nX[10] = [];

    for ($i=0; $i < 10; $i++) 
        $nX[$i] = $num * ($i+1);

        //! AAAAhhhhhh etiquetas style SOS diseñador agredido!!!!
    print(
        "<table style='border-collapse: collapse'> 
        <tr >
            <th style='border-bottom: 1px black solid'>A</th>
            <th style='border-bottom: 1px black solid'>*   B</th>
            <th style='border-bottom: 1px black solid'> = </th>
            <th style='border-bottom: 1px black solid'>A*B</th>
        </tr>
        </table>"
    );
    for($i=0; $i < 10; $i++)
        print("
        <table style='border-collapse: collapse'>
            <tr style='background-color: #70B9AC'>
                <td>".
                $num
            ."</td>
            <td>
            *". ($i+1) ."
            </td>
            <td>    
                = 
            </td>
            <td>".
            $nX[$i]
            ."</td>
            </tr>
        </table>"
    );
    
?>