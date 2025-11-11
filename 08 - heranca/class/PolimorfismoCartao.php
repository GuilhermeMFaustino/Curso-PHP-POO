<?php 

class PolimorfismoCartao extends Polimorfismo
{
    public $juros;
    public $encargos;
    public $parcelas;
    public $numParcelas;

    public function __construct($produto, $valor)
    {
        parent::__construct($produto, $valor);
        $this->juros = 1.17;
        $this->methodo = 'Cartao de Credito';
    }

    public function Pagar($parcelas = null)
    {
        $this->setNumParcelas($parcelas);
        $this->setEncargos();

        $this->valor = $this->valor + $this->encargos;
        $this->parcelas = $this->valor / $this->numParcelas;

        echo "Voce pagou {$this->Real($this->valor)} por um {$this->produto}<br>";
        echo "Pagamento efetuado via {$this->methodo} em {$this->numParcelas} x iguais de {$this->Real($this->parcelas)}";
    }

    public function setJuros($juros): self
    {
        $this->juros = $juros;

        return $this;
    }

    public function setEncargos(): self
    {
        $this->encargos = ($this->valor * ($this->juros /100)) * $this->numParcelas;

        return $this;
    }
    
    public function setNumParcelas($numParcelas): self
    {
        $this->numParcelas = (int) $numParcelas >= 1 ? $numParcelas : 1;

        return $this;
    }
}