<?php
require 'lib/config.php';
require 'util.php';

// head
$head = array('head.htm', 'session.htm','menu.htm', 'error.htm');

// body
$template = array('userok.htm');

// footer
$footer = array('footer.htm');

// page
g56::page($head, $template, $footer);
?>


  

