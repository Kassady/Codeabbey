<?php
$buffer = fopen("input.txt","r+");
$count = fgets($buffer);
for ($i = 0; $i < $count; $i++) {
    $num = fgets($buffer);
    $num = ((int) ($num*6))+1;
    echo $num . " ";
}