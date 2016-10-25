<?php
$buffer = fopen("input.txt","r+");
$count = fgets($buffer);
$values = fgets($buffer);
$values = explode(" ", $values);
for ($i = 0; $i < $count; $i++) {
    $result = 0;
    $number = str_split($values[$i],1);
    foreach ($number as $key=>$value) {
        $result += $value*($key+1);
    }
    echo $result . " ";
}