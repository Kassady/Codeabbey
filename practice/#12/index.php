<?php
$buffer = fopen("input.txt","r+");
$count = fgets($buffer);
for ($i = 0; $i < $count; $i++) {
    $difference = 0;
    $result = array();
    $values = fgets($buffer);
    $values = explode(" ", $values);
    $departure = ($values[0]*86400)+($values[1]*3600)+($values[2]*60)+$values[3];
    $arrival = ($values[4]*86400)+($values[5]*3600)+($values[6]*60)+$values[7];
    $difference = $arrival - $departure;
    $days = intval($difference / 86400);
    $digits = $difference % 86400;
    $hours = intval($digits / 3600);
    $digits = $digits % 3600;
    $minutes = intval($digits / 60);
    $digits = $digits % 60;
    $seconds = $digits;
    echo "(" . $days . " " . $hours . " " . $minutes . " " . $seconds . ") ";
}