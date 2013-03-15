
<?php

function __autoload($class) {
    include 'models/' . ucfirst(strtolower($class)) . '.php';
}

?>


<!DOCTYPE html PUBLIC
    "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>scesi macchiato</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-language" content="es" />
        <meta http-equiv="title" content="scesi macchiato" />
        <meta name="author" content="proyecto mARTadero" />
        <meta name="distribution" content="global" />
        <meta name="description" content="reproductor en linea de archivos mp3" />
        <meta name="keywords" content="scesi,musica,mp3,macchiato,player" />
        <meta name="locality" content="Cochabamba, Bolivia" />
        <meta name="organization" content="SCESI | Sociedad científica de estudiantes de sistemas e informática" />
        <meta name="origen" content="SCESI | Sociedad científica de estudiantes de sistemas e informática" />
        <meta name="revisit" content="1 days" />

        <meta name="title" content="scesi macchiato" />
        <link href="/media/cup.png" rel="icon" type="image/png" />
        <link href="/media/css/style.css" media="screen" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="header"></div>
        <div id="wrapper">
            <div id="content">
                <?php
                echo '..' . $_GET['page'];
                ?>
                
            </div>
            <div id="footer"></div>
        </div>
    </body>
</html>
