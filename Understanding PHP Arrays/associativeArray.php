<?php 
$studentinfo = [];
$studentinfo['name'] = "Aiden";
$studentinfo['Age'] = 11;
$studentinfo['Class'] = 6;
$studentinfo['RollNumber'] = 71;
$studentinfo['Contact'] = "info@adiyan.com";

foreach ($studentinfo as $key => $value){
    echo $key .":".$value."\n";
}
?>