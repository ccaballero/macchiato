<?php

$mp3 = '/media/music/Arctic Monkeys/2007 - Favourite worst nightmare/03 - D is for dangerous.mp3';

$tag = id3_get_tag($mp3);
print_r($tag);
