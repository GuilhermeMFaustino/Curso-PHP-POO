<?php 


class Polimorfismo{

    public $produto;
    public $methodo;
    public $valor;
    
    public function __construct($produto, $valor){
        $this->valor = $valor;
        $this->produto = $produto;
        $this->methodo = 'Boleto';
    }

    public function Pagar(){
        echo "voce pagou {$this->Real($this->valor)} pro um {$this->produto}<br>";
        echo "<small>pagamento via {$this->methodo}</small>";
    }

    public function Real($valor)
    {
        return number_format($valor, 2, ",", ".");
    }
}