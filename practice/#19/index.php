<?php
$buffer = fopen("input.txt","r+");
$count = fgets($buffer);
$open = array("{", "[", "(","<");
$close = array("}", "]", ")",">");
$key = array("{" => "}", "[" => "]", "(" => ")", "<" => ">");

for($i = 0; $i < $count; $i++) {

    $stack = array();
    $string = fgets($buffer);
    $stringArray = str_split($string);

    $isValid = true;

    foreach ($stringArray as $char) {

        $isOpen = in_array($char, $open);
        $isClosed = in_array($char, $close);
        $isBrace = $isOpen || $isClosed;

        if (!$isBrace) {
            continue;
        }

        if ($isOpen) {

            array_push($stack, $char);

        } else {

            $stackChar = array_pop($stack);
            if ($char !== $key[ $stackChar ]) {
                $isValid = false;
                break;
            }
        }
    }

    echo $isValid && empty($stack) ? '1 ' : '0 ';

}