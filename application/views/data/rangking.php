<?php
// $result = $this->db->get('rangking')->result_array();

$query = "SELECT ";

foreach ($tahun as $t) {
	$query .= "a.R".$t['tahun'].",";
	$query .= "c.T".$t['tahun'].",";
}
$query .= "	a.nik,
			b.nama FROM rangking a
		LEFT JOIN list_karyawan b on a.nik = b.nik
		LEFT JOIN nilai_terbobot c on a.nik = c.nik
		ORDER BY a.nik";

$result = $this->db->query($query)->result_array();

echo json_encode($result);