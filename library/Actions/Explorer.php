<?php

class Actions_Explorer extends Actions_Abstract
{
    public function run() {
        $this->view->list_artist = $this->listArtist();
        $this->view->active_artist = '311';
    }
    
    public function listArtist() {
        return Utils_Scanner::scanner($this->view->collection, '', false);
    }
}
