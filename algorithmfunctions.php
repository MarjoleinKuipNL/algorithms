<?php
 function bubbleSort($array){
    for ($i=0; $i < count($array)-2; $i++) { 
        # code...
        for ($j=0; $j < count($array) -2-$i; $j++) { 
            # code...
            if($array[$j] > $array[$j+1]){
                $temp = $array[$j+1];
                $array[$j+1] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
} 
$firstArray = array(5,6,8,12, 10);
$this.bubbleSort($firstArray);
?>