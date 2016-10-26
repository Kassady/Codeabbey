<?php
$buffer = fopen("input.txt","r+");
$count = fgets($buffer);
for ($i = 0; $i < $count; $i++) {
    $values = fgets($buffer);
    $values = explode(" ", $values);
    $x = $values[0];
    $y = $values[1];
    $n = $values[2];
}