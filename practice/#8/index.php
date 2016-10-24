<?php
$buffer = fopen("input.txt","r+");
$result = 0;
$count = fgets($buffer);
for ($i = 0; $i < $count; $i++) {
    $nums = fgets($buffer);
    $nums = explode(" ", $nums);
    $start = $nums[0];
    $step = $nums[1];
    $sums = $nums[2];
    $result = ((2*$start+($step*($sums-1)))/2)*$sums;
    echo $result . " ";
}