<?php
	if (isset($_GET['kriteria'])) {
		$this->db->like('kode',$_GET['kriteria']);
		$result = $this->db->get('list_kriteria')->result_array();
		echo json_encode($result);
	} else {
		echo json_encode(false);
	}