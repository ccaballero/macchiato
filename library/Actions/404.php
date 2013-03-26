<?php

class Actions_404 extends Actions_Abstract
{
    public function run() {
        $this->view->speakker = false;
        
        header('HTTP/1.0 404 Not Found');
    }
}
