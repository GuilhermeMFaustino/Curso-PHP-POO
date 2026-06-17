<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<hr>
    <h3>Retorno de Flags</h3>
    <hr>

    <?php
     function Idade($idade = null){
        if(!$idade):
        return false;
        elseif(!is_int($idade)):
            return false;
        endif;

        return "Voce nasceu em: ". (date('Y') - $idade);
     }

        $idade = 'abs';
        $idade = 45;

        if(Idade($idade)):
            echo Idade($idade);
        else:
            echo "Erro, informe um int idade";
        endif;
     
    ?>


    <h3>Tratamento por existencia</h3>
    <hr>
    <?php
    //require('inc/Config.php');   
    $string = 'contato';
    $string = "";

    if (is_string($string)):
        echo "string é uma string";
    elseif (!is_array($string)):
        echo "string nao é uma string";
    endif;

    echo "<hr>";
    if (!empty($string)):
        echo "String existe e tem valor";
    elseif (isset($string)):
        echo "string existe e mas esta em branco";
    endif;

    ?>

    <hr>
    <hr>
    <h3>Tomada de decisao</h3>
    <hr>

    <?php
    $decisao = 'gui@gui.com.br';
    if (!filter_var($decisao, FILTER_VALIDATE_EMAIL)) {
        echo "email informado é invalido";
    } elseif ($decisao == 'gui@gui.com.br') {
        die('esse email e restrito');
    } else {
        echo "e-mail valido";
    }

    echo " :)";
    ?>
    

    
</body>

</html>