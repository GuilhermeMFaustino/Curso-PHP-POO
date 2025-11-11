<?php

header('content-type: text/html; charsert=utf8');


class minhaClasse
{
    public $nome;
    public $empresa;
    public $ramo;

    

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of empresa
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set the value of empresa
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get the value of ramo
     */
    public function getRamo()
    {
        return $this->ramo;
    }

    /**
     * Set the value of ramo
     */
    public function setRamo($ramo)
    {
        $this->ramo = $ramo;

        return $this;
    }
}
