<?php

// $colBaru = "";
// foreach($all_kriteria as $ak){
// 	$colBaru .= ",sum( if( b.kriteria = '".$ak['kode']."', nilai, 0 ) ) AS ".$ak['kode'];
// }

// $query = $this->db->query(" SELECT 
// 							    a.nik,a.nama 
// 							    {$colBaru}
// 							FROM 
// 							    list_karyawan a
// 							LEFT JOIN 
// 								list_nilai b on a.nik = b.nik
// 							GROUP BY 
// 							    a.nik;")->result_array();

// echo json_encode($query);
// echo $querry;

$result = $this->db->get('list_nilai')->result_array();

echo json_encode($result);