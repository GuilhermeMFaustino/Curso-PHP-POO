<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php 
    $eu = null;

    if(!$eu):
        $a = new Exception("Eu é null", E_USER_NOTICE);
    endif;

    echo $a->getMessage();

    var_dump($a);

    try{

    if(!$eu):
        throw new Exception("eu novamente", E_USER_NOTICE);
        endif;
    
    }catch(Exception $e){
        echo "<p>Erro #{$e->getCode()}: {$e->getMessage()}<br>";
        echo "<small>{$e->getFile()} na linha {$e->getLine()}</small>";
    }
    ?>
</body>

</html>