<?php
$result = 0;
$buffer = fopen("input.txt","r+");
$buffer = fgets($buffer);
$buffer = explode(" ", $buffer);
$count = $buffer[0];
for ($i = 1; $i <= $count; $i++) {
    $result = (($buffer[$i]-32)*5)/9;
    $result = round($result, 0 , PHP_ROUND_HALF_UP);
    echo $result . " ";
}
