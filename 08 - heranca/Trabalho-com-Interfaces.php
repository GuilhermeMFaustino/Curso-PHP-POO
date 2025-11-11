<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        require "../08 - heranca/class/interfaces/IAluno.php";
        require "inc/Config.php";


        $aluno = new TrabalhoComInterfaces('Guilherme', 'php');
        $aluno->formar();
        $aluno->Matricular("php novo");

        var_dump($aluno);
    ?>
</body>
</html>