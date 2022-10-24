<?php

//CONCATENAÇÃO:
//$nome = 'Arnaldo';
//$sobrenome = 'Nolasco';
//$nome_completo = "{$nome} {$sobrenome}";

//print 'Nome: ' . $nome_completo;

//---------------------------------------------------------

//ASPAS DUPLAS:
//print "{$nome} \"{$sobrenome}\"";

//SOMA DE VALORES:
//$a = 4;
//$b = 5.5;

//var_dump($a * $b);

//---------------------------------------------------------

//PASSAGEM POR REFERENCIA:
//$a = 5;
//$b = &$a;

//$a = 10;

//var_dump($a);
//var_dump($b);

//---------------------------------------------------------

/*$peso = 30;

/if($peso > 25){
    print 'Multa';
}*/

//---------------------------------------------------------

//EMPTY:
/*$nome = 's';

if(empty($nome)){
    print 'Nome está vazio...';
}else{
    print 'Nome não está vazio...';
}*/

//---------------------------------------------------------

//$lista = ['cor: ' => 'vermelho', 'peso' => 20];
//var_dump($lista);

//---------------------------------------------------------

$pessoa1 = new stdClass;
$pessoa1 -> nome = 'Pedro';
$pessoa1 -> altura = 1.8;

$pessoa2 = $pessoa1;
$pessoa2 -> nome = 'Vanessa';

echo'<pre>';
var_dump($pessoa1);
var_dump($pessoa2);
echo'</pre>';



