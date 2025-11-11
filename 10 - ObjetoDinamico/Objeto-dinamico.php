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
     
     $objeto = new ObjetoDinmaico();

     $gui = new stdClass();
     $gui->nome = "Guilherme";
     $gui->email = "gui@gui.com.br";


     $objeto->novo($gui);
     var_dump($objeto, $gui);
    ?>
</body>

</html>