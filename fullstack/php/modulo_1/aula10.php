<?php
/*
$salario = 1200;
$tempo = 12;

if(($salario < 1000) AND ($tempo >= 12))
{
    print 'Promoção!';
}
else
{
    print 'Sem promoção...';
}
*/

//---------------------------------------------------------------------
/*
$valor_venda = 120;

if($valor_venda > 100)
{
    $resultado = 'Muito caro';
}
else
{
    $resultado = 'Pode comprar...';
}
 
var_dump($resultado);
*/

//-----------------------------------------------________________
/*
$valor_venda = 150;

$resultado = ($valor_venda > 100)? 'Muito caro' : 'Pode comprar';

var_dump($resultado);
*/

//-------------------------------------------------------------
/*
$cont = 1;

while($cont < 5)
{
    Print $cont;
    $cont++;
}
*/

//--------------------------------------------------------------
/*
for($cont = 1; $cont <= 10; $cont++)
{
    print $cont;
}
*/

//--------------------------------------------------------------
/*
$tipo = 'docx';

switch($tipo)
{
    case 'pdf':
        print 'Arquivo PDF';
        break;
    case 'docx':
        print 'Arquivo DOCX';
        break;
    default:
    print 'Arquivo default...';
}
*/
//---------------------------------------------------------------
/*
$tipo = 'doc';

if($tipo == 'pdf'){
    print 'Arquivo PDF';
}
else if($tipo == 'docx'){
    print 'Arqwuivo DOCX';
}else{
    print 'Arquivo default...';
}
*/

//----------------------------------------------------------------

$lista = ['maçã', 'banana', 'laranja'];

foreach($lista as $frutas){
    echo'<pre>';
    print $frutas;
    echo'</pre>';
}