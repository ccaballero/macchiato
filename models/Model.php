<?php

class Model
{
    private $_data = array();
    
    public function __set($key, $value) {
        $this->_data[$key] = $value;
    }
    
    public function __get($key) {
        if (isset($this->_data[$key])) {
            return $this->_data[$key];
        } else {
            return '';
        }
    }
    
    public function __call($name, $arguments) {
        $_name = strtolower($name);
        
        if (preg_match('/^(s|g)et.*/', $_name) &&
            count($arguments) >= 1) {
            $property = substr($_name, 3);
            echo "[$property]" . PHP_EOL;
            
            if (substr($_name, 0, 1) == 's') {
                $this->$property = $arguments[0];
            } else {
                return $this->$property;
            }
        }
    }
}






