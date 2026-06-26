<?php

class Read extends Conn
{

    private string $select;
    private array $places = [];

    private array $Result;

    /** @var PDOStatement */
    private ?PDOStatement $read = null;

    /** @var PDO */
    private  $Conn;

    public function ExRead(string $Tabela, ?string $Terms = null, ?string $parsestring = null)
    {
        if(!empty($parsestring)):
            parse_str($parsestring, $this->places);
        endif;

        $this->select = "SELECT * FROM {$Tabela} {$Terms}";
       $this->Execute();
      
    }

    public function FullRead(string $query, $parsestring = null): Read
    {
        $this->select = (string) $query;
        if(!empty($parsestring)):
            parse_str($parsestring, $this->places);
        endif;
        $this->Execute();
       return $this;
    }

    public function setPlaces($parsestring)
    {
        parse_str($parsestring, $this->places);
        $this->Execute();
    }

    private function Connect(): void
    {
        $this->Conn = parent::getConn();
        $this->read = $this->Conn->prepare($this->select);
        $this->read->setFetchMode(PDO::FETCH_ASSOC);
    }
    private function getSyntax(): void
    {
      if($this->places):
        foreach($this->places as $vinculo => $valor){
            if($vinculo == 'limit' || $vinculo == 'limit'):
                $valor = (int) $valor;
            endif;
            $this->read->bindValue(":{$vinculo}", $valor, (is_int($valor) ? PDO::PARAM_INT : PDO::PARAM_STR));
        }
      endif;
    }

    private function Execute(): void
    {
        $this->Connect();
        try {
            $this->getSyntax();
            $this->read->execute();
            $this->Result = $this->read->fetchAll();
            
        } catch (PDOException $e) {
         
             WSErro("<b> Erro ao Ler <b>, {$e->getMessage()}", $e->getCode());
        }
    }

    public function getResult() : array
    {
       return $this->Result;
    }

    public function getRowCount()
    {
        return $this->read->rowCount();
    }
}
