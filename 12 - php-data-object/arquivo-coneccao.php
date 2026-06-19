<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require('./__app/Config.php');

    $conn = new Conn();
    $conn->getConn();

    var_dump($conn->getConn());
    ?>
</body>

</html>