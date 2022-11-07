<?php
require_once '../app/config/config.php';

spl_autoload_register(function($classname){
    require_once '../app/libraries/' . $classname . '.php';
});