<?php
function autoload($class){
    $class = str_replace('\\','/',$class);
    if(file_exists($class.'.php')){
        require_once $class.'.php';
    }
}
spl_autoload_register('autoload');
?>
