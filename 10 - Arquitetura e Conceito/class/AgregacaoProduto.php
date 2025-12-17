<?php 

class AgregacaoProduto
{
    
    private $produto;
    private $nome;
    private $valor;    



    public function __construct($produto, $nome, $valor)
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