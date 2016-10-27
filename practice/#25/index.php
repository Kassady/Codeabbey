<?php
$buffer = fopen("input.txt","r+");
$count = fgets($buffer);
for ($i = 0; $i < $count; $i++) {
    $values = fgets($buffer);
    $values = explode(' ', $values);
    //Получаем нужные значения
    $a = $values[0];
    $c = $values[1];
    $m = $values[2];
    $x0 = $values[3];
    $n = $values[4];
    //Заводим массив под числа последовательности
    $array = [];
    //Закидываем туда начало последовательности(Вероятнее всего, ошибка здесь)
    array_push($array,$x0);
    //Циклом расчитываем и закидываем в массив числа(или что-то не так с условием?)
    for ($j = 0; $j < $n; $j++) {
        $array[] = (($a*$array[$j])+$c)%$m;
    }
    //Вывод результата
    echo $array[$n] . " "; // Должно вывести 1 11
}