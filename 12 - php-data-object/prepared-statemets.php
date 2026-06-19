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

    $PDO = new Conn();
    $name = 'Firefox';
    $views = '128';


    try{

    $QRCreate = "INSERT INTO ws_siteviews_agent (agent_name, agent_views) VALUES (?, ?)";
    $Create = $PDO->getConn()->prepare($QRCreate);

    
    // $Create->bindValue(1, 'Chrome', PDO::PARAM_STR);
    // $Create->bindValue(2, '122', PDO::PARAM_STR);
    $Create->bindParam(1, $name, PDO::PARAM_STR, 15);
    $Create->bindParam(2, $views, PDO::PARAM_INT, 5);


    
    // $Create->execute();
    if($Create->rowCount()){
        echo "{$PDO->getConn()->lastInsertId()} - Cadastro com sucesso! <hr>";
    }


    /**
     * SELECT 
     * @var mixed
     */
    $QeSelect = "SELECT * FROM ws_siteviews_agent WHERE agent_views >= :visitas";
    $select = $PDO->getConn()->prepare($QeSelect);

    $select->bindValue(':visitas', '2');

    $select->execute();

    if($select->rowCount() >= 1){
        echo "O resultado retornou {$select->rowCount()} - resultado(s)<hr>";
        $result = $select->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);
    }

    }catch(Exception $e){
       PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
    }
  
    ?>
</body>

</html>