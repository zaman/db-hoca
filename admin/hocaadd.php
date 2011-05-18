<?php
require '../lib/config.php';

$user = g56::get('POST.ad');

$hoca = new g56('HOCA');

if (!$hoca->find("ad = '$user'")) {
	$hoca->get_form($_POST);
	$hoca->save();
	$hoca->load("ad = '$hoca->ad'");

	$image_name = $hoca->hoca_id . ".jpg";

	$file = g56::get('FILES.file');
	if (($error = g56::img_upload("resim", $file, $image_name)) != null) {
		g56::set('SESSION.error', $error);
		$hoca->erase();
		return g56::call('hocaekle.php');
	}

	$image_path = g56::path() . "resim/" . $image_name;
	$size = g56::img_wh($image_path);
	if ($size['withd'] > 300)
		g56::img_small($image_path,  $image_path, 300);

	$ok = array(
			"HOCA BİLGİLERİ" => 
			array(
			"hoca no" => $hoca->hoca_id,
			"Ad" => $hoca->ad,
			"Soyad" => $hoca->soyad,
			"Uni" => $hoca->uni_id,
			"Bolum" => $hoca->bolum_id,
			"Csv" => $hoca->csv
			)
	);

	g56::set('SESSION.ok', $ok);
	g56::call('ok.php');

} else {
	g56::set('SESSION.error', $user . " ismi kullanılıyor başka bir isim seçin.");
	g56::call('hocaekle.php');
}
?>
