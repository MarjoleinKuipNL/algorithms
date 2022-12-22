<?php
$nodes = ['A', 'B', 'C', 'D', 'E'];
$graph = [];
$nodes1 = ['A', 'B', 'C', 'D', 'E'];
foreach ($nodes1 as $xNode){
    foreach ($nodes1 as $yNode){
        echo $graph[$xNode][$yNode] . "\t";
    }
    echo " \n";
}
?>