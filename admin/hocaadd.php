<?php
require '../lib/config.php';

$user = g56::get('POST.ad');

$hoca = new g56('HOCA');
if (!$hoca->find("username = '$user'")) {
	$hoca->get_form($_POST);
	$hoca->save();

$ok = array(
			"HOCA BİLGİLERİ" => 
			array(
			"hoca no" => $hoca->hoca_id,
			"Ad" => $hoca->ad,
			"Soyad" => $hoca->soyad,
			"Uni" => $hoca->uni_id,
			"Bolum" => $hoca->bolum_id,
			"Csv" => $hoca->csv));

g56::set('SESSION.ok', $ok);
	g56::call('ok.php');

} else {
	g56::set('SESSION.error', $user . " ismi kullanılıyor başka bir isim seçin.");
	g56::call('user.php');
}
?>
