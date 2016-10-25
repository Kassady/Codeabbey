<?php
$buffer = fopen("input.txt","r+");
$buff = fgets($buffer);
$buff = explode(' ',$buff);
$length =(int) $buff[0];
$answer =(int) $buff[1];
$values = fgets($buffer);
$values = explode(' ', $values);
for ($i = 0; $i<$answer; $i++) {
    $count = [];
    for ($j = 0; $j<$length; $j++) {
        if($values[$j]==$i+1) {
            $count[$i]++;
        }
    }
    echo $count[$i] . " ";
}