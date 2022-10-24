<?php
// Inicio (2.4):
// $a = 5;
// $b = 2;
// $r = $a + $b;

// echo $r;

//-----------------------------------------------------
// Inicio (2.5):
// $a = 12;
// $b = 9;

// if($a > $b){
//     $r = $a + $b;
//     echo "Resultado: ", $r;
// }else{  
//     echo "Fim do programa";
// }

//-----------------------------------------------------

// Inicio (2.6):

// $a = 20;
// $b = 15;

// if($a > $b){
//     $r = $a + $b;
//     echo $r;
// }else{
//     $r = $a - $b;
//     echo $r;
// }

//-----------------------------------------------------

// Inicio (2.7):

// for($i = 1; $i <= 10; $i++){
//     echo "<p>Escreva: ", $i, "</p>";
// }
// echo "Fim do programa...";

//-----------------------------------------------------

$i = 1;

print_r($i);
$i += 1;

if($i > 10)
{
    echo"<pre>";
    echo "Fim do programa...";
    echo"</pre>";
}
else
{
    while($i < 10)
    {
        echo"<pre>";
        print_r($i);
        $i += 1;
        echo"</pre>";
    }
}











