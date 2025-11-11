<?php 


class PolimorfismoHeranca extends Polimorfismo{

    public $desconto;

    public function __construct($produto, $valor){

        parent::__construct($produto, $valor);  
        $this->desconto = 15;
        $this->methodo = 'Depoosito';      
    }

    public function setDesconto($desconto)
    {
        $this->desconto = $desconto;
    }

    public function Pagar()
    {
       $this->valor = $this->valor - ($this->valor * ($this->desconto / 100));
        parent::Pagar();
    }
}