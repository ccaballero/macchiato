<?php

class Actions_Abstract
{
    protected $view;

    public function __construct(Views_View $view) {
        $this->setView($view);
        $this->setParams();
    }

    public function setView(Views_View $view) {
        $this->view = $view;
    }

    public function getView() {
        return $this->view;
    }

    private function setParams() {
        // change the hardcode
        $this->view->title = 'SCESI macchiato';
        $this->view->controller = get_class($this);
        $this->view->speakker = true;
        $this->view->collection = array(
            '/media/music',
            '/media/soundtracks',
        );
    }

    public function isPost() {
        return $this->evaluateRequest($_POST);
    }

    public function isGet() {
        return $this->evaluateRequest($_GET);
    }

    private function evaluateRequest($variable) {
        if (isset($variable) && !empty($variable)) {
            return true;
        }

        return false;
    }
}
