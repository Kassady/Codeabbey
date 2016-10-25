<?php
$buffer = fopen("input.txt","r+");
$count = fgets($buffer);
for ($i = 0; $i < $count; $i++) {
    $result = 0;
    $values = fgets($buffer);
    $values = explode(" ", $values);
    array_pop($values);
    $length = count($values);
    $result = array_sum($values)/$length;
    $result = round($result, 0 ,PHP_ROUND_HALF_UP);
    echo $result . " ";
}
