<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


function Error($Erro, $mensagem, $arquivo, $linha)
{
    $erro = ($Erro == E_USER_ERROR
        ? 'red'
        : ($Erro == E_USER_WARNING
            ? 'darkorange'
            : 'blue'));

    echo "<p style='color:{$erro}'>";
    echo "Erro na linha #{$linha}: {$mensagem}<br>";
    echo "<small>{$arquivo}</small>";
    echo "</p>";
}

set_error_handler('Error');

$cpf = "ohojo";
$use = "abs";

if (!$cpf):
    trigger_error('Informe seu CPF', E_USER_NOTICE);

elseif ($cpf == '500'):
    trigger_error('Formato não é mais utilizado', E_USER_DEPRECATED);

elseif ($cpf == $use):
    trigger_error('CPF em uso', E_USER_WARNING);

elseif (!preg_match('/^[0-9]+$/', $cpf) || strlen($cpf) != 11):
    trigger_error('CPF INVÁLIDO', E_USER_ERROR);

else:
    echo "CPF válido";
endif;
/*
 $use = '98745634523';
    $cpf = '';
    $cpf = '500';
    $cpf = $use;
    $cpf = "abs";

    if (!$cpf):
        trigger_error('informe seu CPF', E_USER_NOTICE);
    elseif ($cpf == '500'):
        trigger_error('formato nao e mais utilizado', E_USER_DEPRECATED);
    elseif ($cpf == $use):
        trigger_error("cpf em uso", E_USER_WARNING);
    elseif (!preg_match('/^[0-9]*$/i', $cpf) && strlen($cpf) != 11):
        trigger_error('CPF INVALIDO', E_USER_ERROR);
    else:
        echo "CPF Valido";
    endif;*/


    
    ?>
</body>

</html>