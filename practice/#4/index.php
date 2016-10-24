<?php
$buffer = fopen("input.txt","r+");
$count = fgets($buffer);
for ($i = 0; $i < $count; $i++) {
    $nums = fgets($buffer);
    $nums = explode(" ",$nums);
    $first = (int) $nums[0];
    $second = (int) $nums[1];
    if($first>$second){
        echo $second . " ";
    }
    else {
        echo $first . " ";
    }
}
