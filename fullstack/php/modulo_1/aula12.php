<?php

function calcula_imc(float $peso, float $altura): float{
    return $peso / ($altura * $altura);
}
//echo calcula_imc(75, 1.85);

function km_milhas($km){
    global $total;
    $total += $km;
    return $km * 0.6;
}

/*
echo km_milhas(100);
echo km_milhas(100);
echo km_milhas(100);
var_dump($total);
*/

function percorre($km){
    static $total;
    $total += $km;
    print "Percorre mais {$km} de {$total}\n";
}
/*
echo'<pre>';
percorre(100);
percorre(100);
percorre(100);
echo'</pre>';
*/

/*
function incrementa(&$variavel, $valor){
    $variavel += $valor;
}

$teste = 100;
incrementa($teste, 20);

var_dump($teste);

//lista ordenada [sort]
$lista = ['a', 'c', 'b'];
sort($lista);

echo'<pre>';
var_dump($lista);
echo'</pre>';
*/

//----------------------------------------------------------

$remove_acento = function($str){
    return str_replace(['á', 'é', 'í', 'ó', 'ú'],
                       ['a', 'e', 'i', 'o', 'u'],
                       $str);
};
//var_dump($remove_acento('bábébíbóbú'));

function teste($palavra, $funcao){
    $palavra = $funcao($palavra);
    return strtoupper($palavra);
}

var_dump(teste('bábébíbóbú', $remove_acento));

//----------------------------------------------------------






