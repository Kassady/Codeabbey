<?php
$buffer = fopen("input.txt","r+");
$count = fgets($buffer);
$values = fgets($buffer);
$values = explode(' ',$values);
$counter = 0;
for ($i = 0; $i < $count; $i++) {
    $values[$i] = $values[$i]**2;
    if(strlen($values[$i])<8) {
        $dif = 8 - strlen($values[$i]);
        for ($j=0;$j<$dif;$j++){
            $values[$i] =(int) (0 . $values[$i]);
        }
    }
    $values[$i] = ($values[$i]/100)%1000;
    var_dump($values[$i]);
}

