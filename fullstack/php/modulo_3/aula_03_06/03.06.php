<?php

define("DATE_BR", "d/m/Y H:i:s");

$dateNow = new DateTime();
$dateBirth = new DateTime("1979-07-02");
$dateStatic = DateTime::createFromFormat(DATE_BR, "10/03/2022 12:00:00");


echo"<pre>";
var_dump(
    $dateNow,
    $dateBirth,
    $dateStatic
    //get_class_methods($dateNow)
);
echo"</pre>";

echo"<pre>";
var_dump(
    $dateNow-> format(DATE_BR),
    $dateNow-> format("d")
);
echo"</pre>";

echo"<p>Hoje é dia {$dateNow->format("d")} do {$dateNow->format("m")} de {$dateNow->format("Y")}</p>";

$newTimeZone = new DateTimeZone("Pacific/Apia");
$newDateTime = new DateTime("now", $newTimeZone);

echo"<pre>";
 var_dump(
    $newTimeZone,
    $newDateTime
);
echo"</pre>";

//---------------------------------------------------------------

$dateInterval = new DateInterval("P10Y2MT10M");

echo"<pre>";
var_dump($dateInterval);
echo"</pre>";

//---------------------------------------------------------------

$dateTime = new DateTime("now");
//$dateTime->add($dateInterval);
$dateTime->sub($dateInterval);

echo"<pre>";
var_dump($dateTime);
echo"</pre>";

//---------------------------------------------------------------

$birth = new DateTime("2022-07-02");
$dateNow = new DateTime("now");
$diff = $dateNow->diff($birth);

echo"<pre>";
var_dump($birth, $diff);
echo"</pre>";

//---------------------------------------------------------------

if($diff->invert){
    echo"<p>Seu aniversário foi a {$diff->days} dias.</p>";
}else{
    echo"<p>Faltam {$diff->days} dias para o seu aniversário</p>";
}

//---------------------------------------------------------------

$dateResources = new DateTime("now");

echo"<pre>";
var_dump([
    $dateResources->format(DATE_BR),
    $dateResources->sub(DateInterval::createFromDateString("10days"))->format(DATE_BR),
    $dateResources->add(DateInterval::createFromDateString("20days"))->format(DATE_BR)
]);
echo"</pre>";

//---------------------------------------------------------------

$start = new DateTime("now");
$interval = new DateInterval("P3M");
$end = new DateTime("2020-01-01");

$period = new DatePeriod($start, $interval, $end);

echo"<pre>";
var_dump([
    $start->format(DATE_BR),
    $interval,
    $end->format(DATE_BR)
], $period, get_class_methods($period));
echo"</pre>";

echo"<h1>Sua assinatura:</h1>";
foreach($period as $recurrences){
    echo "<p>Proximo vencimento {$recurrences->format(DATE_BR)}</p>";
}