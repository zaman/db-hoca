<?php
require 'lib/config.php';

$hoca_id = g56::get('SESSION.hoca');
$hoca = new g56("HOCA");
$hoca->load("hoca_id = '" . $hoca_id . "'");
echo "önce",$hoca->puan;
$hoca->puan = $hoca->puan + 1;
echo "sonra",$hoca->puan;

$hoca->save();

$hoca->load("hoca_id = '" . $hoca_id . "'");
g56::set('SESSION.ok', array(
						"Ad" => $hoca->ad,
						"Soyad" => $hoca->soyad,
						"Puan" => $hoca->puan
					));

g56::clear('SESSION.hoca');
g56::call('ok.php');
?>
