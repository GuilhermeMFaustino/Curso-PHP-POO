<?php

header('content-type: text/html; charsert=utf8');


function checkDir($dir){

    if(is_dir($dir) && is_file($dir)){
        return true;
    }else{
        return false;
    }
}
$getDir = __DIR__;
$setDir = "{$getDir}/05";

if(!checkDir($setDir)){
    mkdir($setDir, 777);
}

rename($setDir, "{$getDir}/img");

$newDir = getcwd();
$opneDir = opendir($newDir);
while($file = readdir($opneDir)):
    if($file != '.' && $file != '..'){
        echo "<img src='img/{$file}'";
        echo "{$file}</br>";
    }
endwhile;
var_dump($getDir);