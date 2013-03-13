<?php

include 'Model.php';

class Song extends Model
{    
    public function __toString() {
        return "[{$this->track}] {$this->title}";
    }
}
