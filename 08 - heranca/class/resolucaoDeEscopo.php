<?php 


class ResolucaoDeEscopo
{
    public $product;
    public $valor;

    public static $vendas;

    public static $lucros;

    public function __construct($product, $valor)
    {
        $this->product = $product;
        $this->valor = $valor;
    }

    public function vendas()
    {
        self::$vendas  +=1;
        self::$lucros = $this->valor * self::$vendas;
        echo "{$this->product} vendido por R$ {$this->valor}</br>";
    }

    public static function Relatorio()
    {
        echo "<hr>";
        echo "Este profuto vendeu " . self::$vendas ." unidades total R$" . self::$lucros;
        echo "<hr>";
    }
}