<?php

class MySingleton
{
    private static $instance;
    private $counter;

    private function __construct()
    {
        echo 'Contruyendo objeto..'.PHP_EOL;
    }

    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function hazAlgo()
    {
        echo 'Grrrrrrrrrr'.PHP_EOL;
        ++$this->counter;
    }

    public function getCounter()
    {
        return $this->counter;
    }
}

MySingleton::getInstance()->hazAlgo();
MySingleton::getInstance()->hazAlgo();
MySingleton::getInstance()->hazAlgo();
MySingleton::getInstance()->hazAlgo();
MySingleton::getInstance()->hazAlgo();

echo 'Contador = '.mySingleton::getInstance()->getCounter().PHP_EOL;


/*
Contruyendo objeto..
Grrrrrrrr
Grrrrrrrr
Grrrrrrrr
Grrrrrrrr
Grrrrrrrr
Contador = 5
*/
