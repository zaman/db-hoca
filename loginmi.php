<?php
require 'lib/config.php';

$member = new g56('MEMBER');
if ($member->find("username = '" . g56::get('POST.username') . "' and password = '" . g56::get('POST.password') . "'")) {
	$member->load("username = '" . g56::get('POST.username') . "' and password = '" . g56::get('POST.password') . "'");

	if (g56::exists('SESSION.error'))
		g56::clear('SESSION.error');

	$ok = array(
		  "KULLANICI GİRİŞİ" =>
		  array(
			"Ad" => $member->ad,
			"Soyad" => $member->soyad,
			),
		  );
	g56::set('SESSION.name', $member->username);
	g56::set('SESSION.password', $member->password);
	g56::set('SESSION.member_id', $member->member_id);
	g56::set('SESSION.ok', $ok);
	g56::call('ayinhocasi.php');
} else {
	g56::set('SESSION.error', "isim veya şifreniz hatalı, kontrol ediniz.");
	g56::call('login.php');
}
?>
