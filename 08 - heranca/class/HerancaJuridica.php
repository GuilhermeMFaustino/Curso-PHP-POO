<?php 


class HerancaJuridica extends Heranca{

    public $empresa;
    public $funcionarios;

    public function __construct($nome, $idade, $empresa)
    {
        parent::__construct($nome, $idade);
        $this->empresa = $empresa;
    }

    public function contratar($Pessoa)
    {
        echo "a {$this->empresa} empresa de {$this->nome} contratou {$Pessoa}";
        $this->funcionarios += 1;
    }

    public function verEmpresa()
    {
        echo "{} foi fundada por {} <small style='#09f'>";
         parent::verPessoa();
        echo "</samll>";
    }

}