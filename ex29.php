<!DOCTYPE html>
<head>
<meta charset="UTF-8"/>
</head>
</html>

<?php

    $x = $_GET["V1"];
    $Y = $_GET["V2"];

    for(;$x >= $Y;){

        $squad = $x * $x;

        echo "O quadrado de " + $x + " é " + $squad + "<br>";

        $x--;
    }
    
?>
