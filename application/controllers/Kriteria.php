<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_nilai');
		$this->load->model('m_kriteria');
		$this->m_nilai->hitung();
		$this->load->library('session');
	}

	public function index($kode = "")
	{	
		if($this->session->userdata('user')){
			$data["judul"] = "Tabel Kriteria";
			if ($kode==null){
				$data["informasi"] = "Berisi tentang kriteria penilaian yang berlaku di Bina Dana Sejahtera. <u>Klik tabel untuk mengubah informasi</u>.";
			} else {
				$data["informasi"] = "Selamat datang ".$nama;
			}
			$data["tahun_kriteria"] = $this->m_kriteria->get_tahun_kriteria();
			$data["page"] = "tables/kriteria";
			$data["halaman"][] = array("link"=>"kriteria","bread"=>"Tabel Kriteria");
			$this->load->view('dashboard',$data);
		} else {
            $data["judul"] = "Data Kriteria";
            $data['loginUlang'] = "stop";
            $data['all_karyawan'] = $this->m_karyawan->get_all_karyawan();
            $this->load->view('sign/in',$data);
        }

	}
}
