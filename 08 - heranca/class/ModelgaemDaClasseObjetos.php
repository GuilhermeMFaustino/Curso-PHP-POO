<?php


class ModelgaemDaClasseObjetos
{

    public $nome;
    public $idade;
    public $profissao;
    public $empresa;
    public $salario;
    public $conta;

    public function __construct($nome, $idade, $profissao, $conta)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->profissao = $profissao;
        $this->conta = $conta;
    }

    public function trabalhar($empresa, $salario, $profissao): void
    {
        $this->empresa = $empresa;
        $this->salario = $salario;
        $this->profissao = $profissao;
    }

    public function receber($valor)
    {
        $this->conta += $valor;
    }
}
