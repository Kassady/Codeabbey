<?php
$buffer = fopen("input.txt","r+");
$count = fgets($buffer);
$open = array("{", "[", "(","<");
$close = array("}", "]", ")",">");
$key = array("{" => "}", "[" => "]", "(" => ")", "<" => ">");
for($i = 0; $i < $count; $i++) {
    $stack = array();
    $string = fgets($buffer);
    $length = strlen($string);
    $string = str_split($string);
    for ($j = 0; $j > $length; $j++) {
        foreach ($string as $digit) {
            if ($digit == $open[$j]) {
                array_push($stack, $digit);
                echo "Сел! ";
            } elseif (($digit == $close[$j])) {
                array_pop($stack);
                echo "Встал - вышел! ";
            }
        }
    }
    if (empty($stack)) {
        echo "1 ";
    }
    else {
        echo "0 ";
    }

}
