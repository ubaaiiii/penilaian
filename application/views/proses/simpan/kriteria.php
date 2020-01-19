<?php

if (isset($_GET['kode']) && isset($_GET['deskripsi']) && isset($_GET['bobot']) && isset($_GET['atribut'])){
	$kode = $_GET['kode'];

	$data = array(
			'kode'=>$kode,
			'deskripsi'=>$_GET['deskripsi'],
			'bobot'=>$_GET['bobot'],
			'atribut'=>$_GET['atribut']
			);
	
	// $cari = $this->db->get('list_kriteria')->result_array();

	$cari = $this->db->query("select * from list_kriteria where kode='".$kode."'")->row();
	
	if(isset($cari)){
		$this->db->update('list_kriteria',$data);
	} else {
		$this->db->set($data);
		$this->db->insert('list_kriteria');
	}

	echo "Berhasil"
}