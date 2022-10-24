<?php

// $myAge = function($year){
//     $age = date("Y") - $year;
//     return "<p>Você tem {$age} anos</p>";
// };

// echo $myAge(1979);
// echo $myAge(1973);
// echo $myAge(1967);
// echo $myAge(1940);

//-----------------------------------------------

//  $priceBr = function($price){
//      return number_format($price, 2, ",", ".");
// };

// echo "<p>O projeto custa R$ {$priceBr(3600)}. Vamos fechar?</p>";
//--------------------------------------------------------------------

// $myCart = [];
// $myCart["totalPrice"] = 0;
// $cartAdd = function($item, $qtd, $price ) use (&$myCart){

//     $myCart[$item] = $qtd * $price;
//     $myCart["totalPrice"] += $myCart[$item];
// };

// $cartAdd("HTML5", 1, 497);
// $cartAdd("JQuery", 1, 380);

// echo"<pre>";
// var_dump($myCart);
// echo"</pre>";

//-----------------------------------------------------------------

// $iterator = 101;
//  function showDates($days){
//     $salveDate = [];
//     for($day = 1; $day < $days; $day++){
//         $saveDate[] = date("d/m/Y", strtotime("+1{$day} days"));
//     }
//     return $saveDate;
//  }

//  echo "<div style='text-align:center'>";
//  foreach(showDates($iterator) as $date){
//     echo "<small class='tag'>{$date}</small>".PHP_EOL;
//  }
//  echo"</div>";

//------------------------------------------------------------------

$iterator = 500;
function generatorDate($days)
{
    for($day = 1; $day <= $days; $day++)
    {
        yield date("d/m/Y", strtotime("+{$day}days"));
    }
}

echo "<div style='text-align:center'>";
foreach(generatorDate($iterator) as $date)
{
   echo "<small class='tag'>{$date}</small>".PHP_EOL;
}
echo"</div>";
