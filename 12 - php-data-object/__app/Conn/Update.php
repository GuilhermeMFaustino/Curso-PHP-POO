<?php

class Update extends Conn
{

    private string $tabela;

    private array $dados;

    private string $terms;
    private array $places = [];

    private string $Query;
    private $Result;

    /** @var PDOStatement */
    private PDOStatement $Update;

    /** @var PDO */
    private  $Conn;

    public function ExUpdate(string $tabela, array $dados, ?string $terms , ?string $parsestring = null)
    {
        $this->tabela = $tabela;
        $this->dados = $dados;
        $this->terms = $terms;

        parse_str($parsestring, $this->places);
        $this->getSyntax();
        $this->Execute();
      
    }

    public function setPlaces($parsestring)
    {
        parse_str($parsestring, $this->places);
        $this->Execute();
    }

    private function Connect(): void
    {
        $this->Conn = parent::getConn();
        $this->Update = $this->Conn->prepare($this->Query);
    }
    private function getSyntax(): void
    {
      
        foreach($this->dados as $key => $value){
           $places[] = $key . ' = :' . $key;
        }
        $places = implode(', ', $places);
        $this->Query = "UPDATE {$this->tabela} SET {$places} {$this->terms}";
    }

    private function Execute(): void
    {
        $this->Connect();
        try {
            $this->Update->execute(array_merge($this->dados, $this->places));
            $this->Result = true;
            
        } catch (PDOException $e) {
         
             WSErro("<b> Erro ao Ler <b>, {$e->getMessage()}", $e->getCode());
        }
    }

    public function getResult() : bool
    {
       return $this->Result;
    }

    public function getRowCount()
    {
        return $this->Update->rowCount();
    }
}
