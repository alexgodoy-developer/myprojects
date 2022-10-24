<?php

$arrA = array(1, 2, 3);
$arrA = [0, 1, 2, 3];


echo"<pre>";
var_dump($arrA);
echo"</pre>";

$arrayIndex = [
    "Brian",
    "Angus",
    "Malcolm"
];


$arrayIndex[] = "Cliff";
$arrayIndex[] = "Phill";

echo"<pre>";
var_dump($arrayIndex);
echo"</pre>";


$arrayAssoc = [
    "vocal" => "Brian",
    "solo_guitar" => "Angus",
    "base_guitar" => "Malcolm",
    "bass_guitar" => "Cliff"
];

$arrayAssoc["drums"] = "Phill";
$arrayAssoc["rock_band"] = "AC/DC"; 

echo"<pre>";
var_dump($arrayAssoc);
echo"</pre>";

//ARRAY MULTIDIMENSIONAL:
$brian = ["Brian", "Mic"];
$angus = ["name" => "Angus", "instrument" => "Guitar"];

$instruments = [
    $brian,
    $angus
];

echo"<pre>";
var_dump($instruments);
echo"</pre>";

echo"<pre>";
var_dump([
    "brian" => $brian,
    "angus" => $angus
]);
echo"</pre>";

$acdc = [
    "band" => "AC/DC",
    "vocal" => "Brian",
    "solo_guitar" => "Angus",
    "base_guitar" => "Malcolm",
    "bass_guitar" => "Cliff",
    "drums" => "Phill",
];

echo "<p>O vocal da banda AC/DC é {$acdc["vocal"]} e junto com {$acdc["solo_guitar"]} fazem um ótimo show de rock</p>";


$pearl = [
    "band" => "Pearl Jam",
    "vocal" => "Eddie",
    "solo_guitar" => "Mike",
    "base_guitar" => "Stone",
    "bass_guitar" => "Jeff",
    "drums" => "Jack",
];

$rockBands = [
    "acdc" => $acdc,
    "pearl_jam" => $pearl
];

echo"<pre>";
var_dump($rockBands);
echo"</pre>";

echo "<p>{$rockBands["pearl_jam"]["vocal"]}</p>";

//PERCORRENDO O ARRAY:
foreach ($acdc as $item){
    echo"<p>{$item}</p>";
}

//PERCORRENDO E IMPLEMENTANDO NO ARRAY:
foreach($acdc as $key => $value){
    echo "<p>{$value} is a {$key} of band</p>";
}

foreach($rockBands as $rockBands){
    echo"<pre>";
    var_dump($rockBands);
    echo"</pre>";
    $art = "<article><h1>Nome da banda</h1><p>%s</p><p>%s</p><p>%s</p><p>%s</p><p>%s</p></article>";
    vprintf($art, $rockBands);
}