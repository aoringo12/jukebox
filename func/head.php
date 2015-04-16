<?php
require_once(dirname(__FILE__).'/../template_func/accessory.php');
require_once(dirname(__FILE__).'/../template_func/html_Writer.php');
$html = new html_writer();
$html->nav_title = "jukebox";
$html->nav_items = [
  ["test.php" , "使い方"] ,
  ["http://www.dodontof.com/" , "どどんとふ@えくすとり～む"] ,
  ["http://4d4l.net/" , "TRPG every day"] ,
];