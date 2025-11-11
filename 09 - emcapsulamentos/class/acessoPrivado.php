<?php 


class AcessoPrivado
{
    private $nome;
    private $email;
    private int $cpf;


    public function __construct($nome, $email, $cpf)
    {
        $this->setNome($nome);
        $this->setEmail($email);  
        $this->setCpf($cpf);
    }

    public function setNome($nome)
    {
        if($nome && is_string($nome)){
            $this->nome = $nome;
        }else{
            die("Erro no nome");
        }
    }

    public function setEmail($email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            die("Email invalido");
        }else{
            $this->email = $email;
        }
    }

    public function setCpf($cpf)
    {
        if(preg_match('/[0-9]*/i', $cpf) && strlen($cpf) == 11)
        {
            $this->cpf = $cpf;
        }else{
            die("erro no cpf");
        }
    }

}