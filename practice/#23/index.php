<?php
$buffer = fopen('input.txt','r+');
$values = fgets($buffer);
$values = explode(' ', $values);
array_pop($values);
$count = count($values);
$control_sum = 0;
$counter = 0;
$pass = 0;
for ($i = 0; $i<$count-1; $i++) {
    if($values[$i]>$values[$i+1]) {
        $counter++;
        $buf = $values[$i];
        $values[$i] = $values[$i+1];
        $values[$i+1] = $buf;
    }
}
foreach ($values as $value) {
    $control_sum = (($control_sum+ $value)*113)%10000007 ;
}
echo $counter . " " . $control_sum;