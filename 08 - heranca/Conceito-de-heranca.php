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
    $Pessoa = new heranca("Guilherme", 27);
    $Pessoa->formar("php Oridnetado a Objetos");
    $Pessoa->formar("css");
    $Pessoa->formar("java");
    $Pessoa->envelhecer();
    $Pessoa->verPessoa();

    var_dump($Pessoa);

    echo "<hr>";

    $pessoaMe = new HerancaJuridica("Junior Viana", 27, "fsbr");
    $pessoaMe->formar("php Oridnetado a Objetos");
    $pessoaMe->formar("css");
    $pessoaMe->formar("java");
    $pessoaMe->envelhecer();
    $pessoaMe->verPessoa();
    $pessoaMe->contratar("pedro");
    var_dump($pessoaMe);
    ?>
</body>

</html>