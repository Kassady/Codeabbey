<?php
$buffer = fopen("input.txt","r+");
$count = fgets($buffer);
function gcd($a,$b) {
    while ($a!=0 && $b!=0) {
        if ($a > $b) {
            $a = $a % $b;
        } else {
            $b = $b % $a;
        }
    }
    return $a+$b;
}
function lcm($a,$b) {
    return ($a * $b)/gcd($a, $b);
}
for ($i =0; $i < $count; $i++) {
    $values = fgets($buffer);
    $values = explode(' ', $values);
    $a = $values[0];
    $b = $values[1];
    echo "(" . gcd($a,$b) . " " . lcm($a,$b) . ") ";
}