<?php
require 'g56.php';

if (!strlen(session_id())) {
	g56::config(g56::path() . "lib/.g56.ini.example");
	session_start();
}

// kick
g56::run();
?>
