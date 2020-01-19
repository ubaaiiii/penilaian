<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_kriteria');
		$this->load->model('m_karyawan');
		$this->load->model('m_nilai');
		$this->m_nilai->hitung();
		$this->load->library('session');
		
	}

	public function index($nik = "")
	{	
		if($this->session->userdata('user')){
			$data["informasi"] = "Berisi tentang nilai para karyawan Bina Dana Sejahtera. Klik tabel untuk mengubah informasi";
			$data["judul"] = "Tabel Nilai Karyawan";
			$data["page"] = "tables/penilaian";
			$data["tahun_kriteria"] = $this->m_kriteria->get_tahun_kriteria();
			$data["num_kriteria"] = $this->m_kriteria->get_num_kriteria();
			$data["all_kriteria"] = $this->m_kriteria->get_all_kriteria();
			$data["kriteria_id"] = $this->m_kriteria->get_kriteria_id();
			$data["all_karyawan"] = $this->m_karyawan->get_all_karyawan();
			$data["halaman"][] = array("link"=>"penilaian","bread"=>"Tabel Penilaian");
			$this->load->view('dashboard',$data);
		} else {
            $data["judul"] = "Penilaian";
            $data['loginUlang'] = "stop";
            $data['all_karyawan'] = $this->m_karyawan->get_all_karyawan();
            $this->load->view('sign/in',$data);
        }
	}
}
