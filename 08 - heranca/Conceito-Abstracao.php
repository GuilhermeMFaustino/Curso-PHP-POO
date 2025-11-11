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

        /*$abs = new Abstracao("Guilherme", 5000);
        $conta = new Abstracao('Marcos', 1000);

        $abs->Depositar(1000);
        $abs->Sacar(5000);
        $conta->Transferir(500, $abs);

        var_dump($abs);*/

        
        $cc = new AbstracaoCC("guilherme", 0, 500);
        $cp = new AbstracaoCp("Guiglherme", 0);
        
        $cc->Depositar(1000);
        $cc->Sacar(500);
        $cc->Transferir(500, $cp);

        $cc->verSaldo();
        $cp->verSaldo();
        var_dump($cc, $cp);


    ?>
</body>

</html>