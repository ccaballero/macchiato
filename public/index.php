<?php

defined('APPLICATION_PATH') ||
define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../'));

set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/library'),
    get_include_path(),
)));

// autoload
function __autoload($class) {
    include str_replace('_', '/', $class) . '.php';
}

// router
$accepted_requests = array(
    ''           => 'Actions_Home',
    'home'       => 'Actions_Home',
    'collection' => 'Actions_Collection',
    'explorer'   => 'Actions_Explorer',
    'playlists'  => 'Actions_Playlists',
    'login'      => 'Actions_Login',
);

// view
$view = new Views_View();
$view->setLayoutPath(APPLICATION_PATH . '/templates/');

if (isset($_GET['type']) && $_GET['type'] == 'ajax') {
    $view->setLayout('ajax.php');
} else {
    $view->setLayout('default.php');
}

$controller = new Actions_404($view);
if (isset($_GET['page'])) {
    $request = $_GET['page'];
    if (array_key_exists($request, $accepted_requests)) {
        $controller = new $accepted_requests[$request]($view);
    }
}

$controller->run();
echo $controller->getView()->render();
