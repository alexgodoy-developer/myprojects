<?php

$string = "O último show do AC/DC foi incrível!";

echo"<pre>";
var_dump([
    "string" => $string,
    "strlen" => strlen($string), // não aceita acentos, o acento é ontado como caracter
    "mb_strlen" => mb_strlen($string),
    "substr" => substr($string, "9"),
    "mb_substr" => mb_substr($string, "9"),
    "strtoupper" => strtoupper($string),
    "mb_strtoupper" => mb_strtoupper($string)
]);
echo"</pre>";

//-------------------------------------------------------------------------------

$mbString = $string;

echo"<pre>";
var_dump([
    "mb_strtoupper" => mb_strtoupper($mbString),
    "mb_strtolower" => mb_strtolower($mbString),
    "mb_convert_case UPPER" => mb_convert_case($mbString, MB_CASE_UPPER),
    "mb_convert_case LOWER" => mb_convert_case($mbString, MB_CASE_LOWER),
    "mb_convert_case TITLE" => mb_convert_case($mbString, MB_CASE_TITLE),
]);
echo"</pre>";

//-------------------------------------------------------------------------------

$mbReplace = $mbString . " Fui, iria novamente, e foi épico";

echo"<pre>";
var_dump([
    "mb_strlen" => mb_strlen($mbReplace),
    "mb_strpos" => mb_strpos($mbReplace, ", "),
    "mb_strrpos" => mb_strrpos($mbReplace, ", "),
    "mb_substr" => mb_substr($mbReplace, 40 + 2, 14),
    "mb_strstr" => mb_strstr($mbReplace, ", "),
    "mb_strstr" => mb_strstr($mbReplace, ", ", true),
    "mb_strrchr" => mb_strrchr($mbReplace, ", ", true)
 ]);
echo"</pre>";

$mbReplace = $string;

echo"<p>", $string, "</p>";
echo"<p>", str_replace("AC/DC", "Nirvana", $mbReplace), "</p>";
echo"<p>", str_replace(["AC/DC", "eu fui", "último"], "Nirvana", $mbReplace), "</p>";
echo"<p>", str_replace(["AC/DC", "incrível"], ["Nirvana", "Épicooo"], $mbReplace),"</p>";


$article = <<<ROCK
    <article>
        <h3>event</h3>
        <p>desc</p>
    </article>
ROCK;

$articleData = [
    "event" => "Rock in Rio",
    "desc" => $mbReplace
];

echo str_replace(array_keys($articleData), array_values($articleData), $article);

//-------------------------------------------------------------------------------------------

$endPoint = "nome=Alex&email=alex@email.com";
mb_parse_str($endPoint, $parseEndPoint);

echo"<pre>";
var_dump([
    $endPoint,
    $parseEndPoint,
    (object)$parseEndPoint
]);
echo"</pre>";