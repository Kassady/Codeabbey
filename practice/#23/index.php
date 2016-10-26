<?php
$buffer = fopen("input.txt","r+");
$values = fgets($buffer);
$values = explode(" ", $values);
$count = count($values);
array_pop($values);
$control_sum = 0;
$counter = 0;
for ($i = 0; $i<$count; $i++) {
    if($values[$i]>$values[$i+1]) {
        $counter++;
        list($values[$i], $values[$i+1]) = array($values[$i+1], $values[$i]);
    }
    else {
        $counter--;
    }
    $control_sum = (($control_sum + $values[$i])*113)%10000007 ;
}
var_dump($values);
echo $counter . " " . $control_sum;