<?php

function calcMed_pond(float $a, float $b, float $c): float {
    return round(((3 * $a) + (5 * $b) + (2 * $c)) / 10, 1);
}

echo "avarage wight calculus (3a+5b+2c)/10.\n\n";

for ($i = 1; $i <= 3; $i++) {
    $num = (float) readline("number $i: ");
    $nums[] = $num;
}
$media = calcMed_pond(...$nums);

echo "media == $media\n\n";

?>
