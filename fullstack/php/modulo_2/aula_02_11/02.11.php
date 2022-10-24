<?php

require __DIR__ . "/functions.php";

echo"<pre>";
var_dump(functionName("Pearl Jam", "AC/DC", "Alter Bridge"));
echo"</pre>";

echo"<pre>";
var_dump(functionName("Alex", "Bleachzão", "Calêndula"));
echo"</pre>";


echo"<pre>";
var_dump(optionArgs("Roberto"));
echo"</pre>";

echo"<pre>";
var_dump(optionArgs("Roberto", "Amarildo"));
echo"</pre>";

echo"<pre>";
var_dump(optionArgs("Roberto", "Amarildo", "Rebeca"));
echo"</pre>";

$weight = 86;
$height = 1.83;
echo"<pre>";
echo calcImc();
echo"</pre>";

$pay = payTotal(200);
$pay = payTotal(150);
$pay = payTotal(500);

echo $pay;

echo"<pre>";
var_dump(myTeam("Anderson", "Gustavo", "Vanessa", "Carla"));
echo"</pre>";