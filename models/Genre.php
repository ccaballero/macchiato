<?php

class Genre extends Model
{
    public function __toString() {
        return $this->name;
    }
}

?>
