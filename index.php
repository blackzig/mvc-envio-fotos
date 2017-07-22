<?php
session_start();
require 'config.php';

spl_autoload_register(function($class){

    $classe = $class.'.php';

    if(file_exists('controllers/'.$classe)){
        require 'controllers/'.$classe;
    }else if(file_exists('models/'.$classe)){
        require 'models/'.$classe;
    }else if(file_exists('core/'.$classe)){
        require 'core/'.$classe;
    }
});

$core = new Core();
$core->run();