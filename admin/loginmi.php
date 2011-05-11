<?php
require '../lib/config.php';

$ad = g56::get('POST.name');
$ps = g56::get('POST.password');

$admin = new g56('ADMIN');
if ($admin->find("name = '$ad' and password = '$ps'")) {
	$admin->load("name = '$ad' and password = '$ps'");

	if (g56::exists('SESSION.error'))
		g56::clear('SESSION.error');

	g56::set('SESSION.admin', $admin->name);
	g56::call('hocaekle.php');

} else {
	g56::set('SESSION.error', 'böyle bir admin yok');
	g56::call('index.php');
}
?>
