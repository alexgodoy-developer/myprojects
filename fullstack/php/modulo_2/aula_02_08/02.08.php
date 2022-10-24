<?php

$looping = 1;
$while = [];

while($looping <= 5){
    $while[] = $looping;
    $looping++;
}
echo"<pre>";
var_dump($while);
echo"</pre>";

//-----------------------------------------------
$looping = 5;
$while = [];

do{
    $while[] = $looping;
    $looping--;
}while($looping >= 1);

echo"<pre>";
var_dump($while);
echo"</pre>";

//-----------------------------------------------

for($i = 0; $i <= 10; $i++){
    echo"<p>$i</p>";
}

//-----------------------------------------------

for($c = 0; $c <= 10; $c++){
    if($c % 2 == 1){
    }
    if($c >= 10){
        break;
    }
    echo "<p>Pulou + 2 :: {$c}</p>";
}

//-----------------------------------------------

$arry = [];
for($ar = 0; $ar <= 2; $ar++){
    $array[] = $ar;
}
echo"<pre>";
var_dump($array);
echo"</pre>";

//-----------------------------------------------

foreach($array as $item){
    var_dump($item);
}

//-----------------------------------------------

foreach($array as $key => $value){
    echo"<pre>";
    var_dump("{$key} {$value}");
    echo"</pre>";
}
