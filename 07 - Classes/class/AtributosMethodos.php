<?php 


class AtributosMethodos{

    var $nome;
    var $Idade;
    var $Profissao;

    function setUsuario($nome,$Idade,$Profissao){
        $this->nome = $nome;
        $this->Profissao = $Profissao;
        $this->setIdade($Idade);
    }

    function getUsuario(){
        return "{$this->nome} tem {$this->Idade} anos de idade  e trabalha como {$this->Profissao}";
    }


    function getClass(){
        echo "<pre>";
        print_r($this);
        echo "<pre>";
    }

    function setIdade($Idade){
        if(!is_int($Idade)){
            die("Idade Informada e invalida");
        }else{
            $this->Idade = $Idade;
        }
    }
}