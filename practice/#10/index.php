<?php
$buffer = fopen("input.txt","r+");
$count = fgets($buffer);
for ($i = 0; $i < $count; $i++) {
    $values = fgets($buffer);
    $values = explode(" ", $values);
    $x1 = $values[0];
    $y1 = $values[1];
    $x2 = $values[2];
    $y2 = $values[3];
    $a = ($y1 - $y2) / ($x1 - $x2);
    $b = $y1 - ($a * $x1);
    echo "(" . $a . " " . $b . ")" . " ";
}