<?php
require 'lib/config.php';
require 'lib/util.php';

// head
$head = array('head.htm', 'menu.htm','error.htm');

// body
$template = array('ayinhocasi.htm');

// footer
$footer = array('footer.htm');

// page
g56::page($head, $template, $footer);
?>


  
