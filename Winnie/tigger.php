<?php

class Tigger {

private static $counter;
//private $count;    

public function __construct($counter){

    $this->counter=$counter;
    echo "Building character..". PHP_EOL;
    $this->Singleton = new Singleton();
}

//$rtigger = new Singleton();
//$inst = singleton::init()->s();

static function roar($counter){

    echo "Grrrrr!". PHP_EOL;
    echo "<br>";
    //$count=$counter;
    //return $count;
    //++$this->count;
}
public static function getCounter(){

    return self::$counter;
    //echo $this->counter;
}
}
?>