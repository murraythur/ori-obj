<?php

do {
    $input = readline("insert a int number: ");
    $numero = filter_var($input, FILTER_VALIDATE_INT);
    if($numero === false) {
        echo "insert a valid int number.\n";
    }
} while($numero === false);
$result = $numero >= 0 ? $numero * 2 : $numero * 3;

if($numero >= 0) {
    echo "the double $numero is = $result\n";
} else {
    echo "the triple of $numero is $result\n";
}
?>
