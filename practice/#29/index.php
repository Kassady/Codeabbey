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
            }
            ++$i;
        }
        if( !$swapped ) {
            break;
        }
    }
    return [
        'values' => $values
    ];
}

$array = bubbleSort($values);
$flipped = array_flip($values);
$sorted = $array['values'];

for ($k = 0; $k<$size; $k++) {
    echo $flipped[$sorted[$k]]+1 . " ";
}