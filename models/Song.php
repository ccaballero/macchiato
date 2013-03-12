<?php

class Song
{
    private $_data = array();
    
    public function __set($key, $value) {
        $this->_data[$key] = $value;
    }
    
    public function __get($key) {
        return $this->_data[$key];
    }
    
    public function __call($name, $arguments) {
        echo 'invocado el metodo ' . $name . PHP_EOL;
    }
}

$song = new Song();
$song->title = 'asdf';
$song->hola();

var_dump($song);








