<?php
$buffer = fopen("input.txt","r+");
$string = fgets($buffer);
for ($i = strlen($string); $i >= 0; $i--) {
    $string .= $string[$i];
    $string[$i] = '';
}
echo $string;