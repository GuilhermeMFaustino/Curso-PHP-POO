<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css"/>
</head>

<body>

    <?php 
     require('./__app/Config.php');

     trigger_error("Essa é uma NOTICE!", E_USER_NOTICE);
     trigger_error("Esse é um ALERTA!", E_USER_WARNING);
     //trigger_error("Esse é um ERROR!", E_USER_ERROR);

     PHPErro(WS_ERROR, "Esse e um erro personalizado.", __FILE__, __LINE__);

     echo WSErro("Esse é um ACCept", WS_ACCEPT);

     try{
        throw new Exception("Essa é uma Excessao!", E_USER_WARNING);
     }catch(Exception $e){
        PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
     }
    ?>
</body>

</html>