<?php

// controlador
function auth($username, $password) {
    return login($username, md5($password));
}

// modelo
function login($username, $password) {
    echo 'comprobando usuario: ' . $username . PHP_EOL;
    echo 'comprobando contraseña: ' . $password . PHP_EOL;
    return true;
}

$username = 'carlos';
$password = 'asdfasdf';

$user = auth($username, $password);
echo $user;

