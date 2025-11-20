<?php 


class AssociacaoLogin
{

    public $cliente;
    private $login;

    function __construct($cliente){

        if(is_object($cliente)):

        $this->cliente = $cliente;
        $this->login = true;

        else:

            die ("'erro ao logar");
        endif;
    }
    /**
     * Get the value of login
     */
    public function getLogin()
    {
        return $this->login;
    }
}