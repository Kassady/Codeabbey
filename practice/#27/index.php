<?php
$buffer = fopen("input.txt","r+");
$size = fgets($buffer)-1;
$values = fgets($buffer);
$values = explode(" ", $values);
$exchanges = 0;
$runs = 0;
for($j=0; $j < count($values)-1; $j++) {
    $swapped=false;
    $runs++;
  	$i=0;
    while ($i < count($values)-1-$j) {
        if ($values[$i] > $values[$i + 1]) {
            $c = $values[$i];
            $values[$i] = $values[$i + 1];
            $values[$i + 1] = $c;
            $swapped = true;
            $exchanges++;
        }
        ++$i;
    }
    if( !$swapped ) {
        break;
    }
 }
echo $runs . " " . $exchanges ." ";