<?php

function listbox_kv($hash, $name) {
	echo "<select name = '$name'>\n";
	foreach ($hash as $key => $value) //burada tam olarak ne oluyor
		echo "<option value = '$key'> $value </option>\n";
	echo "</select>\n";
}

function listbox($hash, $name) {
	echo "<select name = '$name'>\n";
	foreach ($hash as $key => $value)
		echo "<option value = '$value'> $value </option>\n";
	echo "</select>\n";
}

function hocalar() {
	$ret = array();
	$ret[''] = '';
	$hoca = new g56("HOCA");
	$hocalar = $hoca->rows();
	foreach ($hocalar['items'] as $row)
		if (!array_key_exists($row['hoca_id'], $ret))
			$ret[$row['hoca_id']] = $row['ad'] . " " .$row['soyad'];
	return $ret;
}

function uniler() {
	$ret = array();
	$ret[''] = '';
	$kategori = new g56("UNI");
	$kategoriler = $kategori->rows();
	foreach ($kategoriler['items'] as $row)	
		if (!array_key_exists($row['uni_id'], $ret))
			$ret[$row['uni_id']] = $row['ad'];
	return $ret;
}

function bolumler() {
	$ret = array();
	$ret[''] = '';
	$kategori = new g56("BOLUM");
	$kategoriler = $kategori->rows();
	foreach ($kategoriler['items'] as $row)	
		if (!array_key_exists($row['bolum_id'], $ret))
			$ret[$row['bolum_id']] = $row['ad'];
	return $ret;
}

?>
