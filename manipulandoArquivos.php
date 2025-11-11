<?php

header('content-type: text/html; charsert=utf8');

$baseDir = getcwd() ."/06";
var_dump($baseDir);
echo "</br>";


//r ler
//w escreve
//a anexar

$file = fopen("{$baseDir}/05.txt", "w");
$Txt = "Guilherme \r\nMendes Faustino estudos\r\nwww.guilherme.com";
fwrite($file, $Txt);
fclose($file);

echo "</br>";

$Add = "\r\nGuilherme mendes esperando minha primeira vaga de php";
$fileTrue = fopen("{$baseDir}/05.txt", "a");
fwrite($fileTrue, $Add);
fclose($fileTrue);

$fikeRead = fopen("{$baseDir}/05.txt", "r");
while(!feof($fikeRead)):
    $dao = fgets($fikeRead);
    echo "{$dao}<br>";
endwhile;

$fikeRead = "{$baseDir}/05.txt";
$file = file($fikeRead);
var_dump($file);

//unlink($file);