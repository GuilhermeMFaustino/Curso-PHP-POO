<?php

class ComposicaoEndereco
{
    private string $Cidade;
    private string $Estado;

    public function __construct(string $Cidade, string $Estado)
    {
        $this->Cidade = $Cidade;
        $this->Estado = $Estado;
    }

    public function getCidade()
    {
        return $this->Cidade;
    }

    public function getEstado()
    {
        return $this->Estado;
    }
}
