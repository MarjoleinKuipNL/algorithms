<?php
$array = new SplFixedArray(10);

for ($i=0; $i < 10; $i++) { 
    $array[$i] = $i;
}
for ($i=0; $i < 10; $i++) { 
    echo $array[$i] = $i. "\n";
}
?>