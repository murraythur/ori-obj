<?php

echo "multiplicacao: \n";

$num1 = readline("1num: ");
$num2 = readline("num2: ");

$resultado = 0;
$sinal = ($num2 >= 0) ? 1 : -1;

    for ($i = 0; $i < abs($num2); $i++) {
    $resultado += $num1 * $sinal;
}
echo "resposta: $resultado\n";
?>
