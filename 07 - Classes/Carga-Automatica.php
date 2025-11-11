<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        require("inc/Config.php");

        $classeA = new ClassesObjetos();
        $classeB = new AtributosMethodos();
        $classeC = new ComportamentoInicialdfrter("GUilherme", 28,"web masters", 3500);

    var_dump($classeA, $classeB, $classeC)
    ?>
</body>
</html>