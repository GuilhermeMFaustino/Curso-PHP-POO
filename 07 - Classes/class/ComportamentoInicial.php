<?php 


class ComportamentoInicial{

    var $nome;
    var $idade;
    var $salario;
    var $profissiao;

    public function __construct( $nome, $idade, $profisao, $salario)
    {
        $this->nome = (string) $nome;
        $this->idade = (int) $idade;
        $this->profissiao = (string)$profisao;
        $this->salario = (float) $salario;
    }

    function ver(){
        var_dump($this);
    }
}