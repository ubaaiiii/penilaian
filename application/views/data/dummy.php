<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$sql = "SELECT a.nik, a.nama FROM `list_karyawan` a LEFT JOIN `list_nilai` b on a.nik = b.nik where ";
$i = 1;
foreach ($all_kriteria as $ak) {
	$sql .= "b.`{$ak['kode']}` = 0";
	if ($i!=$num_kriteria){
		$sql .= " or ";
	}
	$i++;
}
$sql .= " order by nik ASC";

echo $sql;
