<?php
$a = 8;
$b = 12;

// start from the larger number and go up until both divide it
$lcm = ($a > $b) ? $a : $b;

while (true) {
    if ($lcm % $a == 0 && $lcm % $b == 0) {
        break;
    }
    $lcm++;
}

echo "LCM of $a and $b = $lcm";
