<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require('inc/Config.php');

        $gui = new AssociacaoCliente("guilherme", "gui@gui.com");
        $assoc = new AssociacaoLogin($gui);


        if($assoc->getLogin()){
            echo "gerenciando cliente id {$assoc->cliente->getCliente()}<br>";
            echo "{$assoc->cliente->nome} logou com sucesso usando o email {$assoc->cliente->email}<hr>";
        }
        var_dump($gui, $assoc);
    ?>
</body>
</html>