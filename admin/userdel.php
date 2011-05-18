<?php
require '../lib/config.php';

$member = new g56('MEMBER');
if ($member->find("username = '" . g56::get('POST.username') . "'")) {
	$member->load("username = '" . g56::get('POST.username') . "'");

	$member->erase();
	if (g56::exists('SESSION.error'))
		g56::clear('SESSION.error');


	$ok = array(
			"SİLİNEN KULLANICI BİLGİLERİ" => 
			array(
			"Kullanıcı adı" => $member->username,
			"Şifre" => $member->password,
			"Ad" => $member->ad,
			"Soyad" => $member->soyad,
			"Email" => $member->email,
			));

	g56::set('SESSION.ok', $ok);
	g56::call('ok.php');

} else {
	g56::set('SESSION.error', "Bu isimde kullanıcı yok!");
	g56::call('usersil.php');
}
?>
