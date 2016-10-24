<?php
$buffer = fopen("input.txt","r+");
$result = 0;
$count = fgets($buffer);
$nums = fgets($buffer);
$nums = explode(" ",$nums);
for ($i = 0; $i < $count; $i++) {
    $result += $nums[$i] ;
}
echo "Ответ:" . $result;