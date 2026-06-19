<?php 
//configuracoes do site

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DBSA','wsphp');

/**
 * autoload de classe
 */
spl_autoload_register(function ($Class)
{
    $cDir = ['Conn'];
    $iDir = null;

    foreach($cDir as $dirName):
        if(!$iDir && file_exists(__DIR__ . "\\{$dirName}\\{$Class}.php") && !is_dir(__DIR__ . "\\{$dirName}\\{$Class}.php")):
            include_once(__DIR__ . "\\{$dirName}\\{$Class}.php");
            $iDir = true;
    endif;
    endforeach;

    if(!$iDir):
        trigger_error("Não foi possivel incluir {$Class}.php", E_USER_ERROR);
    endif;
});


/**
 * Tratamentos de erros
 */

define('WS_ACCEPT','accept');
define('WS_INFOR','infor');
define('WS_ALERT','alert');
define('WS_ERROR','error');

//WSErro - Exibe errors lancados Front

function WSErro(String $ErrMsg, String $ErrNo, ?String $ErrDie = null): String
{
    $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)));
    $Mensagem = "<p class=\"trigger {$CssClass}\">{$ErrMsg}<span class=\"ajax_close\"></span></p>";

    if ($ErrDie):
        die($Mensagem);
    endif;

    return $Mensagem;
}

//PHPErro - personalisa gatilho PHP
function PHPErro(String $ErrNo, String $ErrMsg, String $ErrFile, String $ErrLine): void
{
    $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR? WS_ERROR : $ErrNo)));
    echo "<p class=\"trigger {$CssClass}\">";
    echo "<b>Erro na Linha: {$ErrLine} ::</b> {$ErrMsg}<br>";
    echo "<small>{$ErrFile}</small>";
    echo "<span class=\"ajax_close\"></span></p>";

    if($ErrNo == E_USER_ERROR):
        die();
    endif;
}

set_error_handler('PHPErro');