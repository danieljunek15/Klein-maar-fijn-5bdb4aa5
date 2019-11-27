<?php
//$argv zorgt er voor dat je dierect in je terminal kan typen en dit dierect opslaat in een array.
$array = $argv[1];
//roud zorgt er voor dat je decimalen can toe voegen in dit geval 2 maar je kan er ook 1 to infinety van maken.
$money = round($array, 2);
//dit is een array met Key => Value.
$valueMoney = array(
    $vijftig = 50.00,
    $twintig = 20.00,
    $tien = 10.00,
    $vijf = 5.00,
    $twee = 2.00,
    $een = 1.00,
    $vijftigCent = 0.50,
    $twintigCent = 0.20,
    $tienCent = 0.10,
    $vijfCent = 0.05,
    $tweeCent = 0.02,
    $eenCent = 0.01,
);
//dit is een if statement die zecht dat als $money 0 is hij je door stuurd naar exit(Geen wissel geld); 
if(!$money == 0){
//
foreach($valueMoney as $valueMoney2){
// $floorCheck is de variable waar het andwoord wordt opgeslagen floor($money is het afronden naar beneden / $valueMoney2 is de rekensom.
    $floorCheck = floor($money / $valueMoney2);
//deze if statement kijkt of $floorCheck de waarde 0 of hoger heeft heeft ie 0 dan verschijnt ie niet in je echo.
    if(!$floorCheck == 0){
//gwn een echo $floorCheck = aantal $valueMoney2 = het biljet
    echo "$floorCheck x $valueMoney2".PHP_EOL;
//gwn bedrag berekening. 
    $money = $money - ($floorCheck * $valueMoney2);
    }
}
//gwn exit.
    exit;
}
//gwn een else statement.
else {
//gwn nog een exit XD.
    exit ("Geen wissel geld.");
}