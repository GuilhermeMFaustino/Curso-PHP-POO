<?php 

class ClassesObjetos{

    var $Classe;
    var $funcao;

    function getCalss($class, $funcao){
        echo "<p> a class {$class} serve para funcao {$funcao}";
    }

    function verClass(){
        echo "<pre>";
          var_dump($this);
        echo "<pre>";
    }
}