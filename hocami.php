<?php
require 'lib/config.php';


$uni = g56::get("POST.uni");
$bolum = g56::get("POST.bolum");

$hoca = new g56("HOCA");

if ($hoca->find("bolum_id = '" . $bolum . "' and uni_id = '" .  $uni . "'")) {
	$hocalar = $hoca->rows("bolum_id = '" . $bolum . "' and uni_id = '" .  $uni . "'", "hoca_id, ad, soyad");

	if (g56::exists('SESSION.error'))
		g56::clear('SESSION.error');
	
	$ok = array("HOCA KAYIT BİLGİLERİ" => $hocalar['items']);

	g56::set('SESSION.ok', $ok);

	g56::call('hocalar.php');

} else {
	g56::set('SESSION.error',  'böyle bir hoca yok.');
	g56::call('goster.php');
}
?>
