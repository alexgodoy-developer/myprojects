<?php
/*
$handler = fopen('C:\xampp\htdocs\php-poo\Modulo_1\teste.txt', 'r');

while(feof($handler))
{
    print(fgets($hadler, 4096));
}
fclose($handler);
*/

//---------------------------------------------------------

$handler = fopen('C:\xampp\htdocs\php-poo\Modulo_1\teste1.txt', 'w');
fwrite($handler, 'Linha 1');
fwrite($handle, 'Linha 2');
fwrite($handle, 'LInha 3');
fclose($handler);

