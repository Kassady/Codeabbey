<?php
$buffer = fopen("input.txt","r+");
$count = fgets($buffer);
function optimalCompletionTime($x,$y,$n) {
    return ($x*$y*$n)/($x+$y);
}
function completionTime($x,$y,$n) {
    $ot = optimalCompletionTime($x,$y,$n);
    // 1 сценарий
    $An1 = floor($ot/$x);
    $Bn1 = $n - $An1;//4106
    $t1 = max($An1*$x,$Bn1*$y);
    // 2 сценарий
    $An2 = ceil($ot/$x);
    if ($An1 === $An2) {
        return $t1;
    }
    $Bn2 = $n - $An2;//4105
    $t2 = max($An2*$x,$Bn2*$y);
    // Находим самый быстрый сценарий
    return min($t1,$t2);
}
for ($i = 0; $i < $count; $i++) {
    $values = fgets($buffer);
    $values = explode(" ", $values);
    $x = $values[0];
    $y = $values[1];
    $n = $values[2];
    echo completionTime($x,$y,$n) . " ";
}