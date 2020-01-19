<?php
	if (isset($_GET['nik'])) {
		$id = $_GET['nik'];
		$sql = "";
	    $i=1;
	    foreach ($all_kriteria as $ak) {
	        $sql .= "SELECT '{$ak['kode']}' AS kriteria, `{$ak['kode']}` AS nilai from `list_nilai` where nik='{$id}'";
	        if ($i!=$num_kriteria){
	            $sql .= " union all ";
	        }
	        $i++;
	    }
		$result = $this->db->query($sql)->result_array();
		echo json_encode($result);
	}