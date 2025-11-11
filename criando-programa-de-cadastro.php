<?php

header('content-type: text/html; charsert=utf8');



function validaEmail(string $email): string
{
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }
}

$nome = "Guilherme";
$email = "curso2@upinside.com.br";

if(empty($nome) || empty($email)){
    echo "Ops: informe seu nome e email";
}elseif(!validaEmail($email)){
    echo "Ops informe um email valido";
}else{
    $users = [
        'curso@upinside.com.br',
        'maria@upiniside.com'
    ];

    if(in_array($email, $users)){
        echo "Voce ja esta cadastrado";
    }else{
        echo "cadastro realizado com sucesso";
    }
}
