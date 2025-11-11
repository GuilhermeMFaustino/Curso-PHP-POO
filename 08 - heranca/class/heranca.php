<?php 


class Heranca{

    public $nome;
    public $idade;
    public $formacao;

    public function __construct($nome, $idade){

        $this->nome = $nome;
        $this->idade = $idade;
        $this->formacao = [];
    }

    public function envelhecer(){
        $this->idade += 1;
    }

    public function formar(string $cursos)
    {
        $this->formacao[] = $cursos;
    }

    public function verPessoa()
    {
        $formacao = implode(", ", $this->formacao);
        echo "{$this->nome} tem {$this->idade} anso de idade, e é formado em: {$formacao}</br>";
    }
}