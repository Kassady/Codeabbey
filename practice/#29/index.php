<?php
$buffer = fopen("input.txt","r+");
$size = fgets($buffer);
$values = fgets($buffer);
$values = explode(" ", $values);
function bubbleSort($values) {
    $order = array_keys($values);

    for($j=0; $j < count($values)-1; $j++) {
        $swapped=false;
        $i=0;

        while ($i < count($values)-1-$j) {
            if ($values[$i] > $values[$i + 1]) {
                $c = $values[$i];
                $values[$i] = $values[$i + 1];
                $values[$i + 1] = $c;
                $swapped = true;
                $order[$i] = $i;
            }
            ++$i;
        }
        if( !$swapped ) {
            break;
        }
    }
    return [
        'keyOrder' => $order,
        'values' => $values
    ];
}

$array = bubbleSort($values);
$preSort = $array['keyOrder'];
$sorted = $array['values'];

var_dump($values,$sorted,$preSort);