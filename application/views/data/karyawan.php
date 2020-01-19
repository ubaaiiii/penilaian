<?php
$result = $this->db->get('list_karyawan')->result_array();

echo json_encode($result);