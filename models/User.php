<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author fos
 */
class User {
    
    protected $username;
    protected $fullname;
    protected $tsregister;




    public function getUsername() {
        return $this->username;
    }
    public function getFullname() {
        return $this->fullname;
    }
    
    public function getTsregister() {
        return $this->tsregister;
    }
    public function setUsername($username) {
        $this->username=$username;
    }
    
    public function setFullname($fullname) {
        $this->fullname=$fullname;
    }
    public function setTsregister($tsregister) {
        $this->tsregister=$tsregister;
    }
            
}

