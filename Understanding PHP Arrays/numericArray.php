<?php
$array = [10, 20, 30, 40, 50];
$array[] = 70;
$array[] = 80;

$arraySize = count($array);
for ($i = 0; $i <$arraySize; $i++) {
    echo "Position ". $i . "holds the value ". $array[$i]."\n";
}

$array2 = [];
$array2[10] = 100;
$array2[21] = 200;
$array2[29] = 300;
$array2[500] = 1000;
$array2[71] = 1971;

foreach ($array as $index => $value){
    echo "Position ". $index . " holds the value ". $value."\n";
}
