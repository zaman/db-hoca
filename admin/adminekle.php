<?php
require '../lib/config.php';

$admin = new g56('ADMIN');

if (!$admin->find("name = '" . g56::get('POST.name') . "'")) {
	$admin->get_form($_POST);

	$admin->save();

	$ok = array(
		  "ADMIN KAYIT BİLGİLERİ" =>
		    array(
			"Ad" => $admin->name,
			"Tip" => $admin_tip,
			"Kayıt tarihi" => $admin->tarih,
			),
		  );

	g56::set('SESSION.ok', $ok);
	g56::call(g56::serve_root() . 'ok.php');
} else {

	g56::set('SESSION.error', "bu isimde admin zaten var!");
	g56::call('loginok.php');
}
?>
