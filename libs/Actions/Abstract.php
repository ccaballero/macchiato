<?php

class Actions_Abstract
{
    protected $_view;
    
    public function __construct(Views_View $view) {
        $this->_view = $view;
    }
}
