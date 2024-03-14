<?php


    function f($x) : float
    {
        return (5*$x) + (2*$x) + 3;
    }
    echo "calcute this --> f(x) = 5x + 2x + 3. \n\n";

    for ($i=0; $i < 5; $i++) 
    { 
        $num = readline("insert for x: ");
        $resultado = f($num);

        echo "y = " . $resultado;
        echo "\n\n";
    }
?>
