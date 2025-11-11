<?php


class ModelgaemDaClasse
{

    public $nome;
    public $idade;
    public $profissao;
    public $contaSalario;

    public function __construct($nome, $idade, $profissao, $contaSalario)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->profissao = $profissao;
        $this->contaSalario = $contaSalario;
    }


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
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of profissao
     */
    public function getProfissao()
    {
        return $this->profissao;
    }

    /**
     * Set the value of profissao
     */
    public function setProfissao($profissao): self
    {
        $this->profissao = $profissao;

        return $this;
    }

    /**
     * Get the value of contaSalario
     */
    public function getContaSalario()
    {
        return $this->contaSalario;
    }

    /**
     * Set the value of contaSalario
     */
    public function setContaSalario($contaSalario): self
    {
        $this->contaSalario = $contaSalario;

        return $this;
    }

    public function trabalhar($trabalho, $valor): void
    {
        $this->contaSalario += $valor;
        $this->darEcho("{$this->nome} desenvolveu {$trabalho}e recebeu um  {$this->toReal($valor)}");
    }

    public function toReal($Valor): string
    {
        return number_format($Valor, 2, ".", ",");
    }

    public function darEcho($menssagem)
    {
        echo "<p>{$menssagem}</p>";
    }
}
