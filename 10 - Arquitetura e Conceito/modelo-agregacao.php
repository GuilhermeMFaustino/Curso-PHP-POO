<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require('inc/Config.php');

    $gui = new AssociacaoCliente('21', 'campos@upinside.com.br');

    $prophp = new AgregacaoProduto('20', 'pro php', 334.90);
    $wsphp = new AgregacaoProduto('22', 'WS php', 334.90);
    $prohtml = new AgregacaoProduto('23', 'WS Html', 334.90);


    $outroCurso = new stdClass();
    $outroCurso->produto = '23';
    $outroCurso->nome = 'curso jquery';
    $outroCurso->valor = 400;

    $carrinho = new AgrecacaoCarrinho($gui);

    $carrinho->add($prophp);
    $carrinho->add($wsphp);
    $carrinho->add($prohtml);

    $carrinho->remove($wsphp);
    $carrinho->remove($outroCurso);

    var_dump($carrinho);

    echo "<hr>";
    var_dump($gui, $prophp, $outroCurso,)

    ?>
</body>

</html>