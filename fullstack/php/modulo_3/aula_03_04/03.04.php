<?php

$arrProfile = [
    "name" => "Alex",
    "company" => "Xdevelopment",
    "email" => "xdevelopmento@email.com"
];
// transformando o array em objeto...
$objProfile = (object) $arrProfile;

// echo"<pre>";
// var_dump($arrProfile, $objProfile);
// echo"</pre>";

echo"<p>O {$arrProfile['name']} trabalha na empresa {$arrProfile['company']}</p>";
echo"<p>{$objProfile->name} é o CEO da empresa {$objProfile->company}</p>";

$ceo = $objProfile;
unset($ceo->company);

echo"<pre>";
var_dump($ceo);
echo"</pre>";

//------------------------------------------------

$company = new stdClass();
$company->company = "Xdevelopment";
$company->ceo = $ceo;

$company->manager = new stdClass();
$company->manager->name = "Danilo";
$company->manager->email = "danilo@email.com";

echo"<pre>";
var_dump($company);
echo"</pre>";

//----------------------------------------------

$date = new DateTime();

echo"<pre>";
var_dump([
    "class" => get_class($date),
    "methods" => get_class_methods($date),
    "vars" => get_object_vars($date),
    "parent" => get_parent_class($date),
    "subclass" => is_subclass_of($date, "DateTime")
]);
echo"</pre>";

$expetion = new stdClass();

echo"<pre>";
var_dump([
    "class" => get_class($expetion),
    "methods" => get_class_methods($expetion),
    "vars" => get_object_vars($expetion),
    "parent" => get_parent_class($expetion),
    "subclass" => is_subclass_of($expetion, "DateTime")
]);
echo"</pre>";