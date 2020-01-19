<?php
$result = $this->db->get('list_kriteria')->result_array();

echo json_encode($result);