<?php

class Playlist extends Model
{
    public function __toString() {
        return $this->name;
    }
}
