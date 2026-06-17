<?php


class AgrecacaoCarrinho
{
    private object $cliente;
    private array $produtos;
    private float $total = 0.0;

    public function __construct(AssociacaoCliente $cliente)
    {
        $this->cliente = $cliente;
        $this->produtos = [];
    }

    public function add(AgregacaoProduto $produto)
    {
        $this->produtos[$produto->getProduto()] = $produto;
        $this->total += $produto->getValor();
        $this->vercart($produto, "adicionou");
    }

    public function remove(AgregacaoProduto $produto)
    {
        unset($this->produtos[$produto->getProduto()]);
        $this->total -= $produto->getValor();
        $this->vercart($produto, "removeu");
    }

    public function vercart(AgregacaoProduto $produto, string $Action)
    {
        echo "Voce {$Action} um {$produto->getNome()} em seu carrinho Valor R$ {$this->total} </br>";
    }
}
