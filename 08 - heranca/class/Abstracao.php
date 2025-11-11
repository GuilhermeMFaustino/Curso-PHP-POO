<?php

 abstract class Abstracao
{
    public $cliente;
    public $conta;
    public $saldo;


    public function __construct($cliente, $saldo)
    {
        $this->cliente = $cliente;
        $this->saldo = $saldo;
    }

    public function Depositar($valor)
    {
        $this->saldo += (float)$valor;
        echo "<span style='color:green'><b>{$this->conta}</b> Deposito de {$this->Real($valor)} efetuado com sucesso</span><br>";
    }



    public function Sacar($valor)
    {
        $this->saldo -= (float)$valor;
        echo "<span style='color:red'><b>{$this->conta}:</b> Saque de {$this->Real($valor)} efetuado com sucesso</span><br>";
    }

    public function Transferir($valor, $destino)
    {
        if ($this === $destino):
            echo "Voce nao pode Transferir valores para mesma conta";
        else:
            $this->Sacar($valor);
            $destino->Depositar($valor);
            echo "<span style='color:blue'><b>{$this->conta}:</b> Tranferencia de {$this->Real($valor)} efetuada com sucesso de {$this->cliente} para {$destino->cliente}</span><br>";
        endif;
    }

    public function Extrato()
    {
        echo "<hr><hr> Ola {$this->cliente} seu saldo em {$this->conta} é de {$this->Real($this->saldo)}";
    }
    public function Real($valor)
    {
        return number_format($valor, 2, ".", ",");
    }

    abstract public function verSaldo();
}
