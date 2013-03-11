<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Artist{
    private $ident;
    private $name;
    public function __construct($ident, $name) {
        $this->setIdent($ident);
        $this->setName($name);
    }
    
    public function setName($dato = ""){
        $this->name = $dato;
    }
    
    public function setIdent($dato = ""){
        $this->ident = $dato;
    }
    
    public function getName(){
        return $name;
    }
    
    public function getIdent(){
        return $ident;
    }

    
}

?>
