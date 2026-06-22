<?php

class Create extends Conn
{

    private string $Tabela;
    private array $Dados;

    private $Result;

    /** @var PDOStatement */
    private string $Create;

    /** @var PDO */
    private  $Conn;

    public function ExCreate(string $Tabela, array $Dados)
    {

        $this->Tabela = $Tabela;
        $this->Dados = $Dados;
        $this->getSyntax();
        $this->Execute();
    }

    private function Connect(): void
    {
        $this->Conn = parent::getConn();
        $this->Create = $this->Conn->prepare($this->Create);
        return;
    }
    private function getSyntax(): void
    {
        $fields = implode(', ', array_keys($this->Dados));
        $places = ':' . implode(', :', array_keys($this->Dados));
        $this->Create = "INSERT INTO {$this->Tabela} ({$fields}) VALUES ({$places})";
        return;
    }

    private function Execute(): void
    {
        $this->Connect();
        try {
            $this->Create->execute($this->Dados);
            $this->Result = $this->Conn->lastInsertId();
        } catch (PDOException $e) {
           $this->Result = null;
             WSErro("<b> Erro ao Cadastrar <b>, {$e->getMessage()}", $e->getCode());
        }
    }

    public function getResult() : string|int|null
    {
        return $this->Result;
    }
}
