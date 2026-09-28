<?php
$number = 12345;
$original = $number;
$reverse = 0;

while ($number > 0) {
    $digit = $number % 10;              // last digit
    $reverse = $reverse * 10 + $digit;  // add it to the reverse
    $number = ($number - $digit) / 10;  // remove last digit
}

echo "Reverse of $original = $reverse";
