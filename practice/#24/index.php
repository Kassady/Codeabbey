<?php
$buffer = fopen("input.txt","r+");
$count = fgets($buffer);
$values = fgets($buffer);
$values = explode(' ',$values);
function fonNeumann($value) {
    $value = $value**2;
    $length = strlen($value);
    if ($length < 8) {
        $dif = 8 - $length;
        $value = moreSymbols($value, $dif);
    }
    $value = ($value/100)%10000;
    $length = strlen($value);
    if ($length < 4) {
        $dif = 4 - $length;
        $value = moreSymbols($value,$dif);
    }

    return $value;
}
function moreSymbols($string,$rep) {
    for ($k = 0; $k<$rep; $k++) {
        $string = 0 . $string;
    }
    return $string;
}
function looping($number) {
    $counter = 0;
    $stack = [];
    array_push($stack,$number);
    $Match = false;
    $i = 0;
    while (!$Match) {
        $new = fonNeumann($stack[$i]);
        $i++;
        $counter++;
        if (in_array($new,$stack)) {
            $Match = true;
        }
        else {
            array_push($stack, $new);
        }
    }
    return $counter;
}
for ($i = 0; $i < $count; $i++) {
    echo looping($values[$i]) . " ";
}