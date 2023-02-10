<?php

class Tigger {

private $counter = 0;
private $count;    

public function __construct($counter){

    $this->counter=$counter;
    echo "Building character..". PHP_EOL;
    $this->Singleton = new Singleton();
    
}

//$rtigger = new Singleton();
//$inst = singleton::init()->s();

static function roar($counter){

    ++$count;
    echo " Grrr!". PHP_EOL;
    //$count=$counter;
    //return $count;
}

public function getCounter(){

    return $counter;
}

}
?>