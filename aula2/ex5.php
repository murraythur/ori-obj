<?php

$min = (int) readline("min: ");
$max = (int) readline("Máximo: ");

echo "os divisiveis por 5 entre $min e $max: ";

$first = true;

for ($i = $min; $i < $max; $i++) {
    if ($i % 5 == 0) {
        if (!$first) {
            echo ", ";
        } else {
            $first = false;
        }
        echo $i;
    }
}

echo "\n";

?>
