<?php

$num= 10;
echo "insert number less or iqual 2\n";
while ($num> 2) {
    $num= (int) readline("insert number: ");

    $prime = true;
    if ($num<= 2) {
        break;
    }
    for ($i = 2; $i < $numero; $i++) {
        if ($num% $i == 0) {
            $prime = false;
            break;
        }
    }
    if ($prime) {
        echo "$num is prime :D\n";
    }
}
?>
