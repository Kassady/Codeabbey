<?php
$buffer = fopen("input.txt","r+");
$result = 0;
$pairs = fgets($buffer);
$nums = explode(" ",$pairs);
$result = $nums[0] + $nums[1];
echo "Сумма числа " . $nums[0] . " и числа " . $nums[1] . " равна " . $result;