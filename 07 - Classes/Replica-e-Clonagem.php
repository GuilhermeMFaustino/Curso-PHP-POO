<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    require("class/ReplicaClonagem.php");

    $readA = new ReplicaClonagem("posts", "categoria = 'noticias'", "ORDER BY DATA DESC");
    $readA->ler();

    $readA->setTermos("categoria = internet");
    $readA->ler();

    $raedB = $readA;

    var_dump($readA, $raedB);
?>
</body>
</html>