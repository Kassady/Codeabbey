<?php
$buffer = fopen("input.txt","r+");
$values = fgets($buffer);
$values = explode(" ",$values);
$n = $values[0];
$k = $values[1];
function josephus($n,$k){
    if($n ==1)
        return 1;
    else
        return (josephus($n-1,$k)+$k-1) % $n+1;
}
echo josephus($n,$k);

