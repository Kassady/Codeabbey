<?php
$buffer = fopen("input.txt","r+");
$count = fgets($buffer);
for ($i = 0; $i < $count; $i++) {
    $values = fgets($buffer);
    $values = str_split($values);
    $counter = 0;
    foreach ($values as $key=>$value) {
        if(($value=='a') || ($value=='o') || ($value=='y') || ($value=='i') || ($value=='e') || ($value=='u')) {
            $counter++;
        }
    }
    echo $counter . " ";
}