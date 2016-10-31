<?php
$buffer = fopen("input.txt","r+");
$count = fgets($buffer);
for ($i = 0; $i < $count; $i++) {
    $values = fgets($buffer);
    $values = explode(" ", $values);
    $k =(int) $values[0];
    $string = $values[1];
    $arrayString = str_split(trim($string));
    if ($k > 0) {
        for ($j = 0; $j < $k; $j++) {
            $rotate = array_shift($arrayString);
            array_push($arrayString, $rotate);
        }
    }
    elseif ($k < 0) {
        for ($j = $k; $j < 0; $j++) {
            $rotate = array_pop($arrayString);
            array_unshift($arrayString, $rotate);
        }
    }

    echo implode($arrayString) . " ";
}