<?php 

class AgregacaoProduto
{
    
    private string $produto;
    private string $nome;
    private float $valor;    



    public function __construct(string $produto, string $nome, float $valor)
    {
        $this->produto = $produto;
        $this->nome = $nome;
        $this->valor = $valor;
    }
    /**
     * Get the value of produto
     */
    public function getProduto()
    {
        return $this->produto;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }
}