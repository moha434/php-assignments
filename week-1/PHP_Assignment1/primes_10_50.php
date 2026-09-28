<?php
echo "Prime numbers from 10 to 50:<br>";

for ($n = 10; $n <= 50; $n++) {
    $isPrime = true;

    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo $n . " ";
    }
}
