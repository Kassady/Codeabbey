<?php
$buffer = fopen("input.txt","r+");
$count = fgets($buffer);
for ($i = 0; $i < $count; $i++) {
    $result = 0;
    $values = fgets($buffer);
    $values = explode(" ", $values);
    $number = (int)($values[0]*$values[1])+$values[2];
    $length = strlen($number);
    for ($j = 0; $j < $length; $j++) {
        $digits = $number%10;
        $number = intval($number/10);
        $result += $digits;
    }
    echo $result . " ";
}