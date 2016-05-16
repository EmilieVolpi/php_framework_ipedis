<?php
class Autoloader{
    static function autoload($classname){
        require 'Classes/' . $classname . '.php';
    }
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
}
?>

