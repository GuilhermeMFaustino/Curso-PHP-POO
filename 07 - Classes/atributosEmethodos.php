<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        
        require ("class/AtributosMethodos.php");

        $Pessoa = new AtributosMethodos();
        $Pessoa->setUsuario("Guilherme", 43, "analista");
        $user  = $Pessoa->getUsuario();

        var_dump($user);

        echo "<hr>";

        $Pessoa->Idade = "banana";

        $Pessoa->setUsuario("Guilherme", 22, 'analista');

        $Pessoa->getClass();
?>
    
</body>
</html>