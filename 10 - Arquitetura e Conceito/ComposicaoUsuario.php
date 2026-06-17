<?php


class ComposicaoUsuario
{
    private string $nome;
    private string $email;
    private string $endereco;

    public function __construct(string $nome, string $email)
    {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function cadastrarEndereco(string $Cidade, string $Estado): void
    {
        $this->endereco = new ComposicaoEndereco($Cidade, $Estado);
    }

    public function getEndereco()
    {
        return $this->endereco;
    }
}
