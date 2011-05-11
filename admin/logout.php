<?php
require '../lib/config.php';
g56::clear('SESSION.admin');
g56::clear('SESSION.super');
g56::call('index.php');
?>
