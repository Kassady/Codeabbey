<?php
$buffer = fopen("input.txt","r+");
$values = fgets($buffer);
$values = explode(' ', $values);
$count = count($values);
$encode = [];
function sum($value) {
    $array = [];
    for($s = 0; $s<strlen($value); $s++) {
        $array[] = $value[$s];
    }
    return array_sum($array);
}
function encode($values,$count) {
    $encode = [];
    for ($i = 0; $i<$count; $i++) {
        $encode[] = decbin($values[$i]);
        if (strlen($encode[$i]) < 8) {
            $parity = (sum($encode[$i])) % 2 == 0 ? true : false;
            if ($parity != true) {
                $dif = 7 - strlen($encode[$i]);
                for ($k = 0; $k < $dif; $k++) {
                    $encode[$i] = 0 . $encode[$i];
                }
                $encode[$i] = 1 . $encode[$i];
            } else {
                $dif = 8 - strlen($encode[$i]);
                for ($j = 0; $j < $dif; $j++) {
                    $encode[$i] = 0 . $encode[$i];
                }
            }
        }
    }
    var_dump($encode);
    return $encode;
}
function decode($values,$count) {
    $decode = [];
    for ($i = 0; $i<$count; $i++) {
        $value = $values[$i];
        if ($value[0]==1) {
            $array = [];
            for($s = 0; $s<strlen($value); $s++) {
                $array[] = $value[$s];
            }
            array_shift($array);
            array_unshift($array,'0');
            $values[$i] = implode($array);
            $decode[] = bindec($values[$i]);
        }
        else {
            $decode[] = bindec($values[$i]);
        }
    }
    var_dump($values);
    return $decode;
}
$array = encode($values,$count);
$array = decode($array,$count);
for ($l = 0; $l < $count; $l++) {
    echo chr($array[$l]);
}


