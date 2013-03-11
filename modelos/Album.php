<?php

class Album {
    private $tracks;
    private $title;
    private $year;
    private $ident;
    public function __construct($track,$title, $year,$ident) {
    $this ->setIdent($ident);
    $this ->setTitle($title);
    $this ->setYear($year);
    $this ->setTracks($track);
    }
    
    public function getTracks(){
        return $tracks;
    } 
    
    public function getTitle(){
        return $title;
    }
    
    public function getYear(){
        return $year;
    }
    
    public function getIdent(){
        return $ident;
    }
    
    public function setIdent($idents = ""){
        $this->ident = $idents;
    }
    
    public function setTracks($dato = ""){
        $this->tracks = $dato;
    }
    
    public function setTitle($dato = ""){
        $this->title = $dato;
    }
    
    public function setYear($dato = ""){
        $this->year = $dato;
    }
    
    
    
}
?>
