<?php 
$odd = [];
$odd[] = 1;
$odd[] = 3;
$odd[] = 5;
$odd[] = 7;
$odd[] = 9;

$prime = [];
$prime[] = 2;
$prime[] = 3;
$prime[] = 5;

if(in_array(2, $prime)) {
    echo "2 is a prime";
}

$union = array_merge($prime, $odd);
$intersection = array_intersect($prime, $odd);
$compliment = array_diff($prime, $odd);

$odd = [];
$odd[1] = true;
$odd[3] = true;
$odd[5] = true;
$odd[7] = true;
$odd[9] = true;

$prime = [];
$prime[2] = true;
$prime[3] = true;
$prime[5] = true;

$union = $prime +$odd;
$intersection = array_intersect_key($prime, $odd);
$compliment = array_diff_key($prime, $odd);