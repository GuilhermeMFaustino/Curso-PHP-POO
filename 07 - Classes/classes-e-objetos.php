<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        require("class/ClassesObjetos.php");

        $teste = new ClassesObjetos();
        $teste->getCalss("de Introdução ", "mostrar uma Classe");
        $teste->verClass();
        $teste->Classe = "Nova Classe";
        $teste->funcao = "Nova Funcao";
        $teste->verClass();

    ?>
</body>

</html>