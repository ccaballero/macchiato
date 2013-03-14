<?php

class Artist extends Model
{
    public function __toString() {
        return $this->name;
    }
}
