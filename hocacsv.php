<?php
require 'lib/config.php';
$hoca_id = g56::get('POST.hoca');

$hoca = new g56("HOCA");
$hocam = $hoca->rows("hoca_id = '". $hoca_id . "'", "ad, soyad, csv, puan");

print_r($hocam);
?>
