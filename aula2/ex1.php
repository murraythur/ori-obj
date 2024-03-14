<?php

do {
    $valor = readline("insert a int number: ");
    $num = filter_var($valor);
    if($num === false) {
        echo "insert a valid int number.\n";
    }
} while($num === false);
$resultado = $num >= 0 ? $num * 2 : $num * 3;

if($num >= 0) {
    echo "the double $num is = $resultado\n";
} else {
    echo "the triple of $num is $resultado\n";
}
?>
