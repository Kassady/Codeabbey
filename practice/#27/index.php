<?php
$buffer = fopen("input.txt","r+");
$values = fgets($buffer);
$values = explode(" ", $values);
$count = count($values);
for($j=0; $j < $count-1; $j++) {
    $swapped=false;
	$i=0;
    while ($i < $count-1-$j)  {
        if($values[$i] > $values[$i+1]) {
            $c=$values[$i];
 	        $values[$i]=$values[$i+1];
 	        $values[$i+1]=$c;
 	        $swapped=true;
        }
        ++$i;
    }

    if( !$swapped ) {
        break;
    }
}
 print_r($values);