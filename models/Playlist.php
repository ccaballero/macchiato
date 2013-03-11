<?php
use \User;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Playlist
 *
 * @author fos
 */
class Playlist {
    //put your code here
    
    protected $ident;
    protected $name;
    protected $tsregister;
    protected $users;


    public function getIdent() {
        return $this->ident;
        
    }
    
    public function getName() {
        return $this->name;
        
    }
    
    public function getTsregister() {
        return $this->tsregister;
        
    }


    public function setItem($ident) {
        $this->ident=$ident;
    }
    
    public function setName($name) {
        $this->name=$name;
    }
            
    public function setTsregister($tsregister) {
        $this->tsregister=$tsregister;
    }
}

