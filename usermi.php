<?php
require 'lib/config.php';

$user = g56::get('POST.username');

$member = new g56('MEMBER');
if (!$member->find("username = '$user'")) {
	$member->get_form($_POST);
	$member->save();

$ok = array(
			"MÜŞTERİ BİLGİLERİ" => 
			array(
			"Müşteri no" => $member->member_id,
			"Kullanıcı adı" => $member->username,
			"Şifre" => $member->password,
			"Ad" => $member->ad,
			"Soyad" => $member->soyad,
			"Email" => $member->email));

g56::set('SESSION.ok', $ok);
	g56::call('userok.php');

} else {
	g56::set('SESSION.error', $user . " ismi kullanılıyor başka bir isim seçin.");
	g56::call('users.php');
}
?>
