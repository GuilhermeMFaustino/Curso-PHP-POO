<?php

class Delete extends Conn
{

    private string $tabela;

    private string $terms;
    private array $places = [];

    private string $Query;
    private bool $Result;

    /** @var PDOStatement */
    private PDOStatement $Delete;


    /** @var PDO */
    private  $Conn;

    public function ExDelete(string $tabela, ?string $terms , ?string $parsestring)
    {
        $this->tabela = $tabela;
        $this->terms = $terms;

        parse_str($parsestring, $this->places);
        $this->getSyntax();
        $this->Execute();
      
    }

    public function setPlaces(string $parsestring)
    {
        parse_str($parsestring, $this->places);
        $this->Execute();
    }

    private function Connect(): void
    {
        $this->Conn = parent::getConn();
        $this->Delete = $this->Conn->prepare($this->Query);
    }
    private function getSyntax(): void
    {
      $this->Query = "DELETE FROM {$this->tabela} {$this->terms}";
       
    }

    private function Execute(): void
    {
        $this->Connect();
        try {
          $this->Delete->execute($this->places);
            
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
        return $this->Delete->rowCount();
    }
}
