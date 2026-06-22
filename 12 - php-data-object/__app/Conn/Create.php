<?php

class Create extends Conn
{

    private string $Tabela;
    private array $Dados;

    private $Result;

    /** @var PDOStatement */
    private $Create;

    /** @var PDO */
    private  $Conn;

    public function ExCreate(string $Tabela, array $Dados)
    {

        $this->Tabela = $Tabela;
        $this->Dados = $Dados;
        $this->getSyntax();
        $this->Execute();
    }

    private function Connect()
    {
        $this->Conn = parent::getConn();
        $this->Create = $this->Conn->prepare($this->Create);
    }

    private function getSyntax() 
    {
        $fields = implode(', ', array_keys($this->Dados));
        $places = ':' . implode(', :', array_keys($this->Dados));
        $this->Create = "INSERT INTO {$this->Tabela} ({$fields}) VALUES ({$places})";

    }

    private function Execute()
    {
        $this->Connect();
        try{
           $this->Create->execute($this->Dados);
           //var_dump($d);
            $this->Result = $this->Conn->lastInsertId();
        }catch(PDOException $e){
            $this->Result = null;
            WSErro("<b> Erro ao Cadastrar <b>, {$e->getMessage()}", $e->getCode());
        }
    }

    public function getResult()
    {
        return $this->Result;
    }
}
