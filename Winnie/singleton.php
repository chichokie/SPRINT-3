
<?php

class Singleton {

    private static $instance = null;
    //$counter = 0;

    function __construct(){

        //$this -> instance = $instance;

    }

    public static function init(){

        if (self::$instance == null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public static function s(){

        //global $counter;
        echo " ssssss  ";
        //return $counter;
    }







}
?>