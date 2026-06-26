<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/reset.css"/>
    <title>Document</title>
</head>

<body>
    <?php
    require('./__app/Config.php');

        $dados = ['agent_name' => 'opera', 'agent_views' => '50'];

      $read = new delete();
      $read->ExDelete("ws_siteviews_agent", "WHERE agent_id = :id", 'id=10');

      var_dump($read);
  
    ?>
</body>

</html>