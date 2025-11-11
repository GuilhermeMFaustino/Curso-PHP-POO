<?php 


class AcessoProtegidoFilha extends acessoProtegido
{
    protected $cpf;


    public function cpf($nome, $cpf)
    {
        parent::setNome($nome);
        $this->cpf = $cpf;
    }
}