<?php

function isPrime(int $num): bool {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

echo "inidacted prime numbers detected - press 0 to exit\n";

$primos = [ ];
do {
    $numero = readline("num: ");
    if($numero !== 0 && isPrime($numero)) {
        $primos[] = $numero;
    }
}   while($numero !== 0);
        if (!empty($primos)) {
        echo "primes: " . implode(" - ", $primos) . ".\n";
} else {
        echo "no primes were informed :/.\n";
}

?>
