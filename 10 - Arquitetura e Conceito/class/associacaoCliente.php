<?php 



class AssociacaoCliente
{
    private $cliente;
    public $nome;
    public $email;


    public function __construct($nome, $email)
    {
        $this->cliente = md5($nome);
        $this->nome = $nome;
        $this->email = $email;
    }  

    /**
     * Get the value of cliente
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    
}
