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


        $dados = ["agent_name" => "firefox", "agent_views" => "128", ];
    
        $cadastro = new Create();
        $cadastro->ExCreate("ws_siteviews_agent", $dados);

        if($cadastro->getResult()){
            //echo 'cadastro realizado com sucesso';
            echo WSErro("cadastro realizado com sucesso", WS_ACCEPT);
        }

        var_dump($cadastro);
  
    ?>
</body>

</html>