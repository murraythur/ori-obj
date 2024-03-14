<?php
function ratio($n, $r) {
    $seq = [];
    for ($i = 1; $i <= $n; $i++) {
        $ratio[] = $r * ($i - 1) + 5;
    }
    return $ratio;
}
$num = 10;
$ratio = 3;

$ratio = genRatio($n, $r);

foreach ($ratio as $valor) {
    echo $valor . " ";
}
echo "\n";
