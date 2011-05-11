<?
// config
require 'lib/config.php';

// head // error and session // menu
$head = array('head.htm', 'session.htm', 'menu.htm', 'error.htm');

// body
$template = array('login.htm');

// footer
$footer = array('footer.htm');

// page
g56::page($head, $template, $footer);
?>
