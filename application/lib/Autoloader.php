<?php


class Autoloader {

    public static function register() {

        spl_autoload_register(function($class_name) {

            $dirs = array(
                'application/core/',
                'application/controllers/',
                'application/models/',
                'application/views/',
            );
    
            foreach( $dirs as $dir ) {
                $filename = $dir.$class_name.'.php';
                if (file_exists($filename)) {
                    require_once($filename);
                    return;
                }
            }
        });
        
    }
}
Autoloader::register();