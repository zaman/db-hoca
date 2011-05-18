<?php
require 'lib/config.php';
g56::clear('SESSION.username');
g56::clear('SESSION.password');
g56::clear('SESSION.member_id');
g56::clear('SESSION.admin');
g56::call('index.php');
?>
