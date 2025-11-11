<?php 


class ResolucaoDeEscopoDigital extends ResolucaoDeEscopo
{
    public static $digital;

    public function __construct($product, $valor)
    {
        parent::__construct($product, $valor);
    }

    public function vendas()
    {
        self::$digital +=1;
        parent::vendas();
    }

}