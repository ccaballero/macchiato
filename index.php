
<?php

// start of bootstrap

defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__)));

set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/libs'),
    get_include_path(),
)));

// autoload
function __autoload($class) {
    include APPLICATION_PATH . '/libs/' .
            str_replace('_', '/', $class) . '.php';
}

// router
$accepted_requests = array(
    '' => 'Actions_Inicio',
    'explorar' => 'Actions_Explorar',
    'listas' => 'Actions_Listas',
    'acceder' => 'Actions_Acceder',
);

$request = $_GET['page'];
if (array_key_exists($request, $accepted_requests)) {
    $controller = new $accepted_requests[$request]();
    $controller->run();
} else {
    header('HTTP/1.0 404 Not Found');
}

// view
$view = new Views_View();

echo file_get_contents(APPLICATION_PATH . '/index.html');

// end of bootstrap



