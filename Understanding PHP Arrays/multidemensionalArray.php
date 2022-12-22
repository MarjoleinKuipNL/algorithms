<?php
$players = [];
$players[] = ["Name" => "Ronaldo", "Age" => 31, "Country" => "Portugal", "Team" => "Real madrid"];
$players[] = ["Name" => "Messi", "Age" => 21, "Country" => "Argentina", "Team" => "Barcelona"];
$players[] = ["Name" => "Neymar", "Age" => 24, "Country" => "Brazil", "Team" => "Barcelona"];
$players[] = ["Name" => "Rooney", "Age" => 38, "Country" => "England", "Team" => "Man United"];

foreach ($players as $index => $playerInfo){
    echo 'Info of player # '.($index+1)."\n";
    foreach ($playerInfo as $key => $value){
        echo $key." : " .$value."\n";
    }
    echo "\n";
}

?>