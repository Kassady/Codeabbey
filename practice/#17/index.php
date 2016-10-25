<?php
$buffer = fopen("input.txt","r+");
$count = fgets($buffer);
$values = fgets($buffer);
$values = explode(" ", $values);
$result = 0;
for ($i = 0; $i<$count; $i++) {
    $result = (($result + $values[$i])*113)%10000007 ;
}
echo $result;