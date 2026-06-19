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

  $Conn = new Conn();

  try{

    $Query = "SELECT * FROM ws_siteviews_agent WHERE agent_name = :name";
    $Exe = $Conn->getConn()->prepare($Query);

    $Exe->bindValue(":name", 'Firefox');
    $Exe->execute();

    $Chrome = $Exe->fetchAll((PDO::FETCH_ASSOC));

  }catch(Exception $e){
    PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
  }

  if($Chrome){
    var_dump($Chrome);
  }
  
    ?>
</body>

</html>