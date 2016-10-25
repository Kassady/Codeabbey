<?php
$buffer = fopen("input.txt","r+");
$count = fgets($buffer);
for ($i = 0; $i < $count; $i++) {
    $values = fgets($buffer);
    $values = explode(" ", $values);
    $r = 1;
    $x = $values[0];
    $n = $values[1];
    for ($j = 0; $j<$n; $j++) {
        $r = ($r + $x / $r) / 2;
        $r = round($r, 7);
    }
    echo $r . " ";
}