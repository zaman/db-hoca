<?php
require 'lib/config.php';

$hoca_id = g56::get('SESSION.hoca');
$hoca = new g56("HOCA");
$hoca->load("hoca_id = '" . $hoca_id . "'"); 
$hoca->puan = $hoca->puan + 1;
$hoca->save();

$hoca->load("hoca_id = '" . $hoca_id . "'");
g56::set('SESSION.ok', array(
						"Ad" => $hoca->ad,
						"Soyad" => $hoca->soyad,
						"Puan" => $hoca->puan
					));
g56::call('ok.php');
?>
