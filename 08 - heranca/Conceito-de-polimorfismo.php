<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require "inc/Config.php";

    $boleto = new Polimorfismo("Php", "3480.90");
    $boleto->Pagar();

    var_dump($boleto);
    echo "<hr>";

    $deposito = new PolimorfismoHeranca("Php", "3480.90");
    $deposito->Pagar();

    var_dump($deposito);
    echo "<br>";

    $cartao = new PolimorfismoCartao("Php", "3480.90");
    $cartao->Pagar();
    $cartao->Pagar(10);
    var_dump($cartao);


    ?>
</body>

</html>