<?php


class AbstracaoCC extends Abstracao
{

    public $limite;

    public function __construct($cliente, $saldo, $limite)
    {
        parent::__construct($cliente, $saldo);
        $this->conta = "Conta Corrente";
        $this->limite = (float) $limite;
    }

    final public function Sacar($valor)
    {
        if ($this->saldo + $this->limite) {
            parent::Sacar($valor);
        } else {
            echo "<span style='color:red'><b>{$this->conta}:</b> WErro ao sacar  {$this->Real($valor)} efetuado com sucesso</span><br>";
        }
    }

    final public function Transferir($valor, $destino)
    {
        if ($this->saldo + $this->limite) {
            parent::Sacar($valor);
        } else {
            echo "<span style='color:blue'><b>{$this->conta}:</b> Erro ao sacar de {$this->Real($valor)} saldo de {$this->cliente} para {$destino->cliente}</span><br>";
        }
    }
    public function verSaldo()
    {
        parent::Extrato();
    }
}
