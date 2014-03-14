<?php
require 'template.php';

$system_path = 'system';

define('BASEPATH', str_replace('\\', '/', $system_path));


$main = new Template('mainView.php', array('title'=>'example page', 'leftMessage'=>'left', 'centerMessage'=>'centerMessage'));

$main->render();

/*
참조한 문서
http://stackoverflow.com/questions/62617/whats-the-best-way-to-separate-php-code-and-html

$main = new Template('mainView.php', array(
    'title' => 'example page',
    'leftMenu' => new Template('linkView.php', array('links' => $links)),
    'centerContent' => new Template('homeView.php', array('date' => date())),
));

$main->render();

*/

?>
