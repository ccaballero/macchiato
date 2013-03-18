
<?php

function __autoload($class) {
    include 'models/' . ucfirst(strtolower($class)) . '.php';
}

$ob_controller = ucfirst(strtolower($_GET['page']));
$controller = new $ob_controller();
$controller->run();


        
        
        
        
