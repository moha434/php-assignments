<?php
$a = 18;
$b = 24;
$x = $a;
$y = $b;

// Euclidean algorithm
while ($y != 0) {
    $temp = $y;
    $y = $x % $y;
    $x = $temp;
}

echo "HCF of $a and $b = $x";
