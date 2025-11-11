<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    require ("class/ModelgaemDaClasse.php");

    $gui = new ModelgaemDaClasse("Guilherme", 43, "Programador PHP Junior", 6353);

    $gui->setContaSalario(75000,0,0);
    $gui->trabalhar("Portal Pje ", 15000);
    var_dump($gui);
    ?>
</body>

</html>