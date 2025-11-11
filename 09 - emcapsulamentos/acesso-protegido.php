<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require 'inc/Config.php';

    $gui = new AcessoProtegido("guilherme", "mendes@mendes.com");
    $gui->nome = "maria santos";
    //$gui->email = 'maria@sever.com.br';
    $gui->setEmail("gui@gui.com.br");


    //$gui->setNome("guigua");
    var_dump($gui);
    echo '<hr>';
    $gu = new AcessoProtegidoFilha("pablo", "palblo@email.com");

    $gu->cpf("guigua", "01403605872");

    var_dump($gu);

    ?>
</body>

</html>