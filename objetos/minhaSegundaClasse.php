<?php 


class minhaSegundaClasse extends minhaClasse
{
    public $idade;
    

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
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }
}