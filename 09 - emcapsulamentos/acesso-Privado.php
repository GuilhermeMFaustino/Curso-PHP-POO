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


        $gui = new AcessoPrivado('guilherme', "gui@gui.com", 53956874592);

        var_dump($gui);
    ?>
</body>
</html>