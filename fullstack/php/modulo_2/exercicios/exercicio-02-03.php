<?php

echo "Hello World";

//----------------------------------------------------------------------

echo"<pre>";
echo "Olá Mundo Lindo! ", "<span class='tag'>#BoraAprenderPHP<span>";
echo"</pre>";

//----------------------------------------------------------------------

$hello = "Seja muito bem vindo!";
echo"<pre>";
echo"$hello"; 
echo"</pre>";

echo"<pre>";
echo'$hello';
echo"</pre>";

//----------------------------------------------------------------------

$day = 2;
$event = "natal";
echo"<pre>";
echo"<p>Faltam {$day} dias para o {$event}</p>";
echo"</pre>";

//----------------------------------------------------------------------

$word1 = "Olá";
$word2 = "Mundo!";

?>

<h3><?="{$word1}"?><?=" {$word2}"?></h3>;

<?php
//----------------------------------------------------------------------

$arrayNames = [
    "name1" => "Alex",
    "name2" => "Vanessa",
    "name3" => "Carlos"
];

echo"<pre>";
var_dump($arrayNames);
echo"</pre>";




