<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_nilai');
		$this->load->model('m_karyawan');
		$this->load->library('session');
		// $this->m_nilai->hitung();
	}

	public function index($nama = "")
	{	
		if($this->session->userdata('user')){
			$data["judul"] = "Tabel Karyawan";
			$data["all_karyawan"] = $this->m_karyawan->get_all_karyawan();
			if ($nama==null){
				$data["informasi"] = "Berisi tentang profil karyawan Bina Dana Sejahtera. <u>Klik tabel untuk mengubah informasi</u>";
			} else {
				$data["informasi"] = "Selamat datang ".$nama;
			}
			$data["page"] = "tables/karyawan";
			$data["halaman"][] = array("link"=>"karyawan","bread"=>"Tabel Karyawan");
			$this->load->view('dashboard',$data);
		} else {
            $data["judul"] = "Data Karyawan";
            $data['loginUlang'] = "stop";
            $data['all_karyawan'] = $this->m_karyawan->get_all_karyawan();
            $this->load->view('sign/in',$data);
        }


	}
}
