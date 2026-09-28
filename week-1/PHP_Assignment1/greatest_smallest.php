<?php
$a = 25; $b = 10; $c = 40;

$greatest = $a;
$smallest = $a;

if ($b > $greatest) { $greatest = $b; }
if ($c > $greatest) { $greatest = $c; }
if ($b < $smallest) { $smallest = $b; }
if ($c < $smallest) { $smallest = $c; }

echo "Greatest number: " . $greatest . "<br>";
echo "Smallest number: " . $smallest;
