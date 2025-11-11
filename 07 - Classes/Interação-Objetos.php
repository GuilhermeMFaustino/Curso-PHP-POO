<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    require('class/ModelgaemDaClasseObjetos.php');
    require('class/InteracaoObjetos.php');

    $guilherme = new ModelgaemDaClasseObjetos("Guilherme", 27, "analista", 4000);

    $upiisde = new InteracaoObjetos("guilherme mendes tecnologia");
    $upiisde->Contratar($guilherme, 'webmaster', 5200);
    $upiisde->Pagar();
    $upiisde->Promover("Gerente de Projetos", 12000);
    $upiisde->Demitir(2000);
    var_dump($guilherme, $upiisde);

    ?>
</body>

</html>