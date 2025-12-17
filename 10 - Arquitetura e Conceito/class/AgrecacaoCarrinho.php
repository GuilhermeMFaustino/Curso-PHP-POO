<?php


class AgrecacaoCarrinho
{
    private $cliente;
    private $produtos;
    private $total;

    public function __construct(AssociacaoCliente $cliente)
    {
        $this->cliente = $cliente;
        $this->produtos = array();
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

    public function vercart(AgregacaoProduto $produto, $Action)
    {
        echo "Voce {$Action} um {$produto->getNome()} em seu carrinho Valor R$ {$this->total} </br>";
    }
}
