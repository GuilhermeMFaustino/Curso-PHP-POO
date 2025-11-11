<?php 


class InteracaoObjetos{

    public $empresa;
    public $setores;
    public $funcionario;

    public function __construct($empresa)
    {
        $this->empresa = $empresa;
        $this->setores = 0;        
    }

    public function Contratar($funcionario, $cargo, $salario)
    {
        $this->funcionario = (object)$funcionario;
        $this->funcionario->trabalhar($this->empresa, $salario, $cargo);
    }

    public function Pagar(){
        $this->funcionario->receber($this->funcionario->salario);
    }

    public function Promover($cargo, $salario = null)
    {
        $this->funcionario->profissao = $cargo;
        if($salario){
            $this->funcionario->salario = $salario;
        }
    }

    public function Demitir($resicao)
    {
        $this->funcionario->receber($resicao);
        $this->funcionario->empresa = null;
        $this->funcionario->salario = null;
    }

}