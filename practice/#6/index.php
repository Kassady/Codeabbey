<?php
$buffer = fopen("input.txt","r+");
$result = 0;
$count = fgets($buffer);
for ($i = 0; $i < $count; $i++) {
    $nums = fgets($buffer);
    $nums = explode(" ", $nums);
    if ($nums[1]!= 0) {
        $result = $nums[0]/$nums[1];
        $result = round($result, 0, PHP_ROUND_HALF_UP);
        echo $result . " ";
    }
    else {
        echo "ERROR! DIVISION BY ZERO!";
    }
}
