<!DOCTYPE html>
<head>
<meta charset="UTF-8"/>
</head>
</html>

<?php

    $x = $_GET["V1"];
    $Y = $_GET["V2"];

    if($x < $y){

        
        for(;$x >= $Y;){

            $squad = $x * $x;

            echo "O quadrado de " + $x + " é " + $squad + "<br>";

            $x--;
        }

    }
    else{

                
        for(;$y >= $x;){

            $squad = $y * $y;

            echo "O quadrado de " + $y + " é " + $squad + "<br>";

            $y--;
        }

    }
    
?>
