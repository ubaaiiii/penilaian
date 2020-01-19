<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rangking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_nilai');
		$this->load->library('session');
	}

	public function index($nama = "")
	{	
		if($this->session->userdata('user')){
			$data["judul"] = "Tabel Rangking";
			$data["informasi"] = "Berisi tentang rangking dan nilai keseluruhan karyawan Bina Dana Sejahtera.";	
			$data["page"] = "tables/rangking";
			$data["halaman"][] = array("link"=>"rangking","bread"=>"Tabel Rangking");
			$data["tahun_kriteria"] = $this->m_kriteria->get_tahun_kriteria();
			$data["jumlah_tahun_kriteria"] = $this->m_kriteria->get_num_tahun_kriteria();
			$this->load->view('dashboard',$data);
		} else {
            $data["judul"] = "Rangking";
            $data['loginUlang'] = "stop";
            $data['all_karyawan'] = $this->m_karyawan->get_all_karyawan();
            $this->load->view('sign/in',$data);
        }
	}
}
