<?php 

spl_autoload_register(function ($class)
{
    $dirname = 'class';

    if(file_exists("{$dirname}/{$class}.php")):
        require_once("{$dirname}/{$class}.php");
    else:
        die('erro ao incluir');
    endif;
});