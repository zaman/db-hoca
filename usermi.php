<?php
require 'lib/config.php';
//
// TODO
// sorun şu il ve ilce bilgileri türkçe karakterde sorun çıkartıyor
// halledilmesi gerek
//
//
// TODO
// sorun şu il ve ilce bilgileri $_POST'da kalıyor bir şekilde silinmesi gerek
//

$ilce = "merkez";
$il = g56::get("POST.il");
$user = g56::get("POST.username");

$il = new g56("ILILCE");
$il->load("il = $il and ilce = $ilce");
echo "ahaq";

$il_id = $il->il_id;
unset($_POST["il"]);


$member = new g56("MEMBER");
if (!$member->find("username = '$user'")) {
	$member->get_form($_POST);
	$member->il_id = $il_id;
	$member->tarih = date('y-m-d');
	$member->save();
	if (g56::exists('SESSION.error'))
		g56::clear('SESSION.error');

	$ok = array(
		  "KULLANICI KAYIT BİLGİLERİ" => 
		    array(
			"Nickname" => $member->username,
			"Ad" => $member->ad,
			"Soyad" => $member->soyad,
			"E-mail" => $member->email,
			"Kredi kartno" => $member->kredikart,
			"Tarih" => $member->tarih,
			),
		  );

	g56::set('SESSION.ok', $ok);
	
	g56::call('ok.php');

} else {
	g56::set('SESSION.error', $user . 'ismi kullanılıyor başka bir isim seçin.');
	g56::call('user.php');
}
?>
