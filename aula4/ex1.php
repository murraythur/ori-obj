<?php

function isPrime(int $numx): bool {
    if ($numx <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numx); $i++) {
        if ($numx % $i === 0) {
            return false;
        }
    }
    return true;
}

echo "inidacted prime numbers detected - press 0 to exit\n";

$primes = [ ];
do {
    $numx = readline("num: ");
    if($numx !== 0 && isPrime($numx)) {
        $primes[] = $numx;
    }
}   while($numx !== 0);
        if (!empty($primes)) {
        echo "primes: " . implode(" - ", $primes) . ".\n";
} else {
        echo "no primes were informed :/.\n";
}

?>
