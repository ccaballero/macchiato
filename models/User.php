<?php

class User extends Model
{
    public function __toString() {
        return $this->fullname;
    }
}
