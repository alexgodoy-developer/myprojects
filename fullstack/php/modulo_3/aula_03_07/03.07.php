<?php

$file = __DIR__ . "/file.txt";

if(file_exists($file) && is_file(($file))){
    echo"<p>Existe!</p>";
}else{
    echo"<p>Não existe...</p>";
}

//--------------------------------------------

// cria um arquivo
if(!file_exists($file) || !is_file($file)){

    $fileOpen = fopen($file, "w");
    fwrite($fileOpen, "Linha 1" . PHP_EOL);
    fwrite($fileOpen, "Linha 2" . PHP_EOL);
    fwrite($fileOpen, "Linha 3" . PHP_EOL);
    fwrite($fileOpen, "este texto nao é para lorem e ratro de areis fsrodncio bfnnmjjdbft ,ndahbbbbd nbdhbe  bdh. ponndhfbbbfdbbetbjsdbbsibv");
    fclose($fileOpen);
}else{
    echo"<pre>";
    var_dump(
        file($file),
        pathinfo($file)
    );
    echo"</pre>";
}

echo file($file)[3];

//--------------------------------------------

$open = fopen($file, "r");
while(!feof($open)){
    echo "<p>" . fgets($open) . "</p>";
}

fclose($open);

$getContents = __DIR__ . "/teste2.txt";
//file_get_contents($getContents);
// if(file_exists($getContents) && is_file($getContents)){
//     echo file_get_contents($getContents);
// }else{
//     $data = "<article><h1>Alex</h1><p>CEO UpDev<br>cursodeve@updev.com</p></article>";
//     file_put_contents($getContents, $data);
//     echo file_get_contents($getContents);


// unlink($getContents);
// unlink($file);

if(file_exists(__DIR__ . "teste3.txt") && is_file(__DIR__ . "/teste3.txt")){
    unlink(__DIR__ . "teste3.txt");
}

