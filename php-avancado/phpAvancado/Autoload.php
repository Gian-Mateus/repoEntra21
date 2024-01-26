<?php
class Autoload{
    public function __construct() {
        spl_autoload_register([$this, 'load']);
    }

    private function load($classname){
        set_include_path(__DIR__);
        spl_autoload_extensions('.php');
        spl_autoload($classname);
    }
}
?>