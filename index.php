
<?php

function __autoload($class) {
    include 'models/' . ucfirst(strtolower($class)) . '.php';
}

echo '..' . $_GET['page'];
