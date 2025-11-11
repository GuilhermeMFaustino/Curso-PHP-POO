<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    require("class/ComportamentoInicial.php");

    $gui = new ComportamentoInicial("guilherme", "banana", "web masters", 1589);
    $gui->ver();
?>
</body>
</html>