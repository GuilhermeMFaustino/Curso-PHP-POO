<?php

header('content-type: text/html; charsert=utf8');

require "minhaClasse.php";
require "minhaSegundaClasse.php";

$guilherme = new minhaSegundaClasse();
$guilherme->setNome("Guilherme");
$guilherme->setEmpresa("upinside");
$guilherme->setRamo("cursos web");
$guilherme->setIdade(43);

var_dump($guilherme);
var_dump(get_class_methods($guilherme));
var_dump(get_class_vars("minhaSegundaClasse"));
var_dump(get_class($guilherme));
var_dump(get_parent_class($guilherme));
var_dump(is_subclass_of($guilherme, "minhaclasse"));
var_dump(method_exists($guilherme, "getNome"));


var_dump(call_user_func('strtoupper', $guilherme->getNome()));