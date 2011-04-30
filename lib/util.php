<?php

function listbox_kv($hash, $name) {
	echo "<select name = '$name'>\n";
	foreach ($hash as $key => $value)
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
	foreach ($hoca->rows() as $row)
		if (!array_key_exists($row['hoca_id'], $ret))
			$ret[$row['hoca_id']] = $row['ad'];
	return $ret;
}

function uniler() {
	$ret = array();
	$ret[''] = '';
	$kategori = new g56("UNI");
	foreach ($kategori->rows() as $row)	
		if (!array_key_exists($row['uni_id'], $ret))
			$ret[$row['uni_id']] = $row['ad'];
	return $ret;
}

function bolumler() {
	$ret = array();
	$ret[''] = '';
	$kategori = new g56("BOLUM");
	foreach ($kategori->rows() as $row)	
		if (!array_key_exists($row['bolum_id'], $ret))
			$ret[$row['bolum_id']] = $row['ad'];
	return $ret;
}

?>
