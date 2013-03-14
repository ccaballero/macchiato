<?php

class Album extends Model
{
    public function __toString() {
        return "[{$this->year}] {$this->title}";
    }
}
