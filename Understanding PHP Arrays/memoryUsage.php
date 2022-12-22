<?php
$items = 10000;
$startMemory = memory_get_usage();
$array = new SplFixedArray($items);
for ($i=0; $i <$items ; $i++) { 
    # code...
    $array[$i] = $i;
}

$memoryConsumed = ($sendMemory - $startMemory) / (1024 * 1024);
$memoryConsumed = ceil($memoryConsumed);
echo "Memory = {$memoryConsumed} MB\n";
?>