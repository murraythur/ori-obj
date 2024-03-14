<?php

    $valor = 0;
    $total = 0;
    do
    {
        $total += $valor;
        $valor = readline("Valor: R$");
    } 
    while ($valor != 0);
      echo "total = $total. \n";
?>
