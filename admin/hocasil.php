<?php
require '../lib/config.php';
require '../util.php';

$hoca = new g56('HOCA');

if ($hoca->find("hoca_id = '" . g56::get('POST.hoca_id') . "'")) {
	$hoca->load("hoca_id = '" . $hoca->hoca_id . "'");

	if (g56::exists('SESSION.error'))
		g56::clear('SESSION.error');
	
	$hoca->erase();

	$ok = array(
		  "HOCA SİLME BİLGİLERİ" =>
		    array(
			"Ad" => $hoca->ad,
			)
		  );

	g56::set('SESSION.ok', $ok);
	g56::call(g56::serve_root() . 'ok.php');

} else {
	g56::set('SESSION.error', "Hata oluştu!");
	g56::call('loginok.php');
}
?>
