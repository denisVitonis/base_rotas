<?php
session_start();
require 'config.php';

// 1-controller 2-action 3-action etc...    MVC/home/abrir/123

spl_autoload_register(function($class){

    if (file_exists('controllers/'.$class.'.php')) {

        require 'controllers/'.$class.'.php';
    }
    else if (file_exists('models/'.$class.'.php')) {

        require 'models/'.$class.'.php';
    }
    else if (file_exists('core/'.$class.'.php')) {

        require 'core/'.$class.'.php';
    }
});

$core = new Core();
$core->run();
?>