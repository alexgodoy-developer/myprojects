<?php

$folder = __DIR__ . "/uploads";
if(!file_exists($folder) || !is_dir($folder)){
    mkdir($folder, 0755);
}else{
    echo"<pre>";
    var_dump(scandir($folder));
    echo"</pre>";
}

$file = __DIR__ . "/file.txt";

echo"<pre>";
var_dump(
    pathinfo($file),
    scandir($folder),
    scandir(__DIR__)
);
echo"</pre>";

if(!file_exists($file) || !is_file($file)){
    fopen($file, "w");
}else{
    copy($file, $folder . "/" . basename($file));
    // echo"<pre>";
    // var_dump(filemtime($file), filemtime(__DIR__ . "/uploads/file.txt"));
    // echo"</pre>";
    //rename(__DIR__ . "/uploads/file.txt", __DIR__ . "/uploads/".time(). ".". pathinfo($file)["extension"]);
    rename($file, __DIR__ . "/uploads/".time(). ".". pathinfo($file)["extension"]);
}

//rmdir(__DIR__ . "remove");
$dirRemove = __DIR__ . "/remove";
$dirFiles = array_diff(scandir($dirRemove), [".", ".."]);
$dirCount = count($dirFiles);
echo"<pre>";
var_dump($dirFiles);
echo"</pre>";

if($dirCount >= 1){
    echo"<h2>Clear...</h2>";
    foreach(scandir($dirRemove) as $fileItem){ 
        $fileItem = __DIR__ . "/remove/{$fileItem}";
        if(file_exists($fileItem) && is_file($fileItem)){
            echo"<pre>";
            //var_dump(file($fileItem));
            unlink($fileItem);
            echo"</pre>";
        }
    }

}else{
    rmdir($dirRemove);
}



