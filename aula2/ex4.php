<?php

    $even = array();
    $even = 0;
    $odds = 0;

    for ($i=0; $i < 10; $i++) { 
        echo $i+1 . ". ";
        $even[$i] = readline("insera numr: ");
    if ($even[$i] % 2 == 0) {
            $even++;
        } else {
            $odds++;
        }
    }
    echo "evens = $even \n";
    echo "odds = $odds \n";

?>
