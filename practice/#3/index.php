<?php
$buffer = fopen("input.txt","r+");
$result = 0;
$pairs = fgets($buffer);
for ($i = 0; $i < $pairs; $i++) {
    $nums = fgets($buffer);
    $nums = explode(" ",$nums);
    $result = $nums[0]+$nums[1];
    echo $result . "<br />";
}