<?php
$buffer = fopen("input.txt","r+");
$count = fgets($buffer);
for ($i = 0; $i < $count; $i++) {
    $subjects = fgets($buffer);
    $subjects = explode(" ", $subjects);
    $weight = $subjects[0];
    $height = $subjects[1];
    $bmi = $weight/($height**2);
    if($bmi<18.5){
        echo 'under ';
    }
    elseif (($bmi<25)&&($bmi>18.5)) {
        echo 'normal ';
    }
    elseif (($bmi<30)&&($bmi>25)) {
        echo 'over ';
    }
    elseif ($bmi>30) {
        echo 'obese ';
    }
}