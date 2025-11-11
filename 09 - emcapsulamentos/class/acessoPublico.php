<?php 


class AcessoPublico
{
    public $nome;
    public $email;

    public function __construct($nome, $email)
    {
        $this->nome = $nome;
        $this->setEmail($email);
    }

    public function setEmail($email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            die("Email invalido");
        }else{
            $this->email = $email;
        }
    }
}