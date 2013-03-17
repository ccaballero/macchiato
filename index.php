
<?php

function __autoload($class) {
    include 'models/' . ucfirst(strtolower($class)) . '.php';
}

?>


                <?php
                echo '..' . $_GET['page'];
                ?>
