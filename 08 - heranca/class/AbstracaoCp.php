<?php 

class AbstracaoCp extends AbstracaoCC
{
    public $rendimento;

    public function __construct($cliente, $limite)
    {
        parent::__construct($cliente, 0, $limite);
        $this->conta = "Conta Poupança";
        $this->rendimento = 1.7;
    }

    final public function Depositar($valor)
    {
        $juros = $valor * ($this->rendimento / 100);
        $deposito = $valor + $juros;
        parent::Depositar($deposito);
         echo "<span style='color:#09f'><b> Valor do deposito{$this->Real($valor)}: || Rendimentos </b>   {$this->Real($juros)} </span><br>";
    }

}