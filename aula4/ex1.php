<?php

    $nums = array();
    $soma = 0;

    echo "10 nums avaraging = \n";

    for ($i=0; $i<10; $i++) 
    { 
        $nums[$i] = (float)readline("num: ");
        $soma += $nums[$i];
    }
    echo "avaraged = " . $soma/10 . "\n";
?>
