<?php
$buffer = fopen("input.txt","r+");
$count = fgets($buffer);
for ($i = 0; $i < $count; $i++) {
    $nums = fgets($buffer);
    $nums = explode(" ", $nums);
    $first = (int)$nums[0];
    $second = (int)$nums[1];
    $third = (int)$nums[2];
    if (($first<$second)&&($first<$third)){
        echo $first . " ";
    }
    elseif (($second<$first)&&($second<$third)){
        echo $second . " ";
    }
    else {
        echo $third . " ";
    }
}