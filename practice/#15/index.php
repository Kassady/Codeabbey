<?php
$buffer = fopen("input.txt","r+");
$values = fgets($buffer);
$values = explode(" ", $values);
$count = count($values);
$max = 1;
$min = -1;
for ($i = 0; $i < $count; $i++) {
    $number = (int) $values[$i];
    if ($number>$max) {
        $max = $number;
    }
    elseif ($number<$min) {
        $min = $number;
    }
}
echo $max . " " . $min;