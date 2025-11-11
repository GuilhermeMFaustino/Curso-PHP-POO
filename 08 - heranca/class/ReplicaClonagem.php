<?php 


class ReplicaClonagem{

    var $tabela;
    var $termos;
    var $Addquery;
    var $query;

    public function __construct($tabela, $termos, $Addquery,)
    {
        $this->tabela = $tabela;
        $this->termos = $termos;
        $this->Addquery = $Addquery;
    }

    public function setTermos($termos){
        $this->termos = $termos;
    }
    
    public function ler(){
        $this->query = "SELECT * FROM {$this->tabela} WHERE {$this->termos} {$this->Addquery}";
        echo "{$this->query}<hr>";
    }    
}