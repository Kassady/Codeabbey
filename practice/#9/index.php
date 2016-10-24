<?php
$buffer = fopen("input.txt","r+");
$result = 0;
$count = fgets($buffer);
for ($i = 0; $i < $count; $i++) {
    $sides = fgets($buffer);
    $sides = explode(" ", $sides);
    if (($sides[0] < $sides[1]+$sides[2]) && ($sides[1] < $sides[0]+$sides[2]) && ($sides[2] < $sides[0]+$sides[1])){
        echo 1 . " ";
    }
    else {
        echo 0 . " ";
    }
}