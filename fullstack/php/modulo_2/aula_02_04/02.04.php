<?php

$user_first_name = 'Alex';
$user_last_name = 'Godoy';

echo "<h2>{$user_first_name} {$user_last_name}</h2>";

$user_age = 43;
echo "<p>{$User_first_name} {$user_last_name} <span class='tag'>tem {$user_age}</span></p>";

$user_email = "<p>developer@email.com</p>";
echo $user_email;

$company = "OGAM";
$$company = "Treinamentos";
echo "<h3>{$company} {$OGAM}</h3>";

$calc_a = 10;
$calc_b = 20;
//$calc_b = $calc_a;
$calc_b = &$calc_a;
$calc_b = 50;
$calc_a = 12;

var_dump([
    "a"=> $calc_a,
    "b"=> $calc_b
]);

$true = true;
$false = false;

echo"<pre>";
var_dump($true, $false);
echo"</pre>";


$best_age = ($user_age > 50);

echo"<pre>";
var_dump($best_age);
echo"</pre>";

$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;

echo"<pre>";
var_dump($a, $b, $c, $d, $e);
echo"</pre>";

if($a || $b || $c || $d || $e){
    var_dump(true);
}else{
    var_dump(false);
}

echo "<p>-------------------------------------------</p>";

$code = "<article><h1>Um Call Use Function</h1></article>";
$code_clear = call_user_func("strip_tags", $code);
var_dump($code, $code_clear);

echo "<p>-------------------------------------------</p>";


$code_more = function($code){
    var_dump($code);
};

$code_more("#boraProgramar");

//$code_more("#BoraProgramar");

//-----------------------------------------

$string  = "Olá mundo";
$array = [$string];
$object = new stdClass();
$object->hello = $string;
$null = null;
$int = null;
$float = 1.23213;

echo"<pre>";
var_dump([
    $string,
    $array,
    $object,
    $null,
    $int,
    $float
]);
echo"</pre>";






