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

    $produto = new ResolucaoDeEscopo('livro de php', 59.90);
    $digital = new ResolucaoDeEscopoDigital('livro de php', 59.90);
    $produto->vendas();
    $produto->vendas();
    $produto->vendas();


    $digital->vendas();
    $digital->vendas();


    ResolucaoDeEscopo::Relatorio();
    echo 'esse produto PHP vendeu '. ResolucaoDeEscopo::$vendas;


    var_dump($produto, $digital);

    ?>
</body>

</html>