<?php
echo"<pre>";
var_dump([
    date_default_timezone_get(),
    date(DATE_W3C),
    date("d/m/Y H:i:s")
]);
echo"</pre>";

define("DATE_BR","d/m/Y H:i:s");
// define("DATE_TIMEZONE", "Pacific/Apia");
define("DATE_TIMEZONE", "America/Sao_Paulo");
date_default_timezone_set(DATE_TIMEZONE);

echo"<pre>";
var_dump([
    date_default_timezone_get(),
    date(DATE_BR)
]);
echo"</pre>";

//-----------------------------------

echo"<pre>";
var_dump(getdate());
echo"</pre>";

echo"<p>Hoje é dia ", getdate()["mday"], "</p>";

echo"<pre>";
var_dump([
    "strtotime" => strtotime("now"),
    "time" => time(),
    "strtotime+10d" => strtotime("+10days"),
    "date DATE_BR" => date(DATE_BR),
    "date+10days" => date(DATE_BR, strtotime("+10days")),
    "date-10days" => date(DATE_BR, strtotime("-10days")),
    "date_1year" => date(DATE_BR, strtotime("+1year")) // aceita (year) no singular ou no plural...
]);
echo"</pre>";

$format = "%d/%m/%Y %Hh%M minutos";
echo "<p>A data de hoje é ", strftime($format), "</p>";
echo strftime("<p>Hoje é dia %d do %m de %Y as %H horas e %M minutos</p>");


