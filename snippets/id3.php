<?php

//http://code.google.com/p/php-reader/wiki/ID3v2

defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/..'));
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/libs'),
    get_include_path(),
)));

require_once 'Zend/Media/Id3v2.php'; // or using autoload 

$mp3 = '/home/rogerex/14 - Matador.mp3';

$id3 = new Zend_Media_Id3v2($mp3);

//$frame = $id3->getFramesByIdentifier('TIT2'); // for song title; or TALB for album title; ..
//echo $frame[0]->getText() . '<br />';
//
//$frame = $id3->getFramesByIdentifier("APIC"); // for attached picture
//echo $frame[0]->getImageType() . '<br />';
//
//$title = $id3->tit2->text;                    // contains the first song title; or talb->text for album title; ...
//$image = $id3->apic->imageType;               // contains the first attached picture type
//
//echo $title . '<br />';
//echo $image . '<br />';
//
//echo '<hr />';
//
//if ($id3->hasFrame("TIME"))
//  echo "The value of TIME is " . $id3->time->text . "\n";
//
//// or with isset ..
//
//if (isset($id3->time))
//  echo "The value of TIME is " . $id3->time->text . "\n";




//$id3info = array();
//foreach ($id3->getFramesByIdentifier("T*") as $frame)
//  $id3info[$frame->identifier] = $frame->text;
//
//print_r($id3info); // will print all textual information found from the tag



//require_once 'Zend/Media/Id3v2.php'; // or using autoload
//require_once 'Zend/Media/Id3/TextFrame.php';
//require_once 'Zend/Media/Id3/LinkFrame.php';
//require_once 'Zend/Media/Id3/Frame/Apic.php';
//
//foreach ($id3->frames as $frames) {
//  foreach ($frames as $frame) {
//    echo $frame->identifier;
//    if ($frame instanceof Zend_Media_Id3_TextFrame)
//      echo ": " . $frame->text;
//    if ($frame instanceof Zend_Media_Id3_LinkFrame)
//      echo ": " . $frame->link;
//    if ($frame instanceof Zend_Media_Id3_Frame_Apic)
//      echo ": " . $frame->imageType;
//
//    // etc..
//
//    echo "\n";
//  }
//}


header("Content-Type: " . $id3->apic->mimeType);
echo $id3->apic->imageData;