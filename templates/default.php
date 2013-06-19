<!DOCTYPE html PUBLIC
    "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $this->title ?></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-language" content="es" />
        <meta http-equiv="title" content="scesi macchiato" />
        <meta name="author" content="SCESI" />
        <meta name="distribution" content="global" />
        <meta name="description" content="reproductor en linea de archivos mp3" />
        <meta name="keywords" content="scesi,musica,mp3,macchiato,player" />
        <meta name="locality" content="Cochabamba, Bolivia" />
        <meta name="organization" content="SCESI | Sociedad científica de estudiantes de sistemas e informática" />
        <meta name="origen" content="SCESI | Sociedad científica de estudiantes de sistemas e informática" />
        <meta name="revisit" content="1 days" />
        <meta name="title" content="scesi macchiato" />

        <link href="/famfamfam/cup.png" rel="icon" type="image/png" />
        <link media="screen" rel="stylesheet" type="text/css" href="/css/layout.css" />

	<script type="text/javascript" src="/js/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="/js/speakker-big-1.2.20r194.min.js"></script>
        <script type="text/javascript">$(document).ready(function() {projekktor('.speakker');});</script>
	<script type="text/javascript" src="/js/macchiato.js"></script>
    </head>
    <body>
        <div id="menubar">
            <div class="background"></div>
            <?php echo $this->menu() ?>
        </div>
        <div class="clear"></div>
        <div id="content"><?php echo $this->content() ?></div>
    <?php if ($this->speakker) { ?>
        <audio class="speakker light">
            <source src="playlist.json" type="application/json"/>
        </audio>
    <?php } ?>
    </body>
</html>
