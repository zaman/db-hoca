<?php
require 'lib/config.php';
require 'util.php';

// head
$head = array('head.htm','menu.htm','adminsession.htm','session.htm', 'error.htm');

// body
$template = array('goster.htm');

// footer
$footer = array('footer.htm');

// page
g56::page($head, $template, $footer);
?>


  
