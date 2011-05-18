<?php
require '../lib/config.php';

$admin = new g56('ADMIN');

if (!$admin->find("name = '" . g56::get('POST.name') . "'")) {
	$admin->get_form($_POST);
	$admin->tarih = date('Y-m-d');

	$admin->save();
	$admin->load("name = '" . g56::get('POST.name') . "'");
	$ok = array(
		  "ADMIN KAYIT BİLGİLERİ" =>
		    array(
			"Ad" => $admin->name,
			"Kayıt tarihi" => $admin->tarih,
			),
		  );

	g56::set('SESSION.ok', $ok);
	g56::call('ok.php');
} else {

	g56::set('SESSION.error', "bu isimde admin zaten var!");
	g56::call('adminekle.php');
}
?>
