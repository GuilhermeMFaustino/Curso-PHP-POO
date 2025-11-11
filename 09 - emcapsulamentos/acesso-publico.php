<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require 'inc/Config.php';

        $user = new acessoPublico("guilherme", "gui@gui.com.br");
        $user->nome = "marcus";
        $user->email = "gui@gui.com";

        var_dump($user);
    ?>
</body>
</html>