<?php 


class ObjetoDinmaico
{
    public $nome;
    private $email;

    public function novo($cliente)
    {
        if(is_object($cliente)){
            $this->nome = $cliente->nome;
            $this->email = $cliente->email;
        }else{
            die("Informe um objeto com nome e email");
        }
        
    }
}