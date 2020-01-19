<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilaiku extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_nilai');
		$this->load->model('m_kriteria');
		$this->m_nilai->hitung();
		$this->load->library('session');
	}

	public function index()
	{

		$data['num_kriteria'] = $this->m_kriteria->get_num_kriteria();
		$data['all_kriteria'] = $this->m_kriteria->get_all_kriteria();
		$data['nilai_pivot'] = $this->m_nilai->get_nilai_pivot();
		$data["tahun_kriteria"] = $this->m_kriteria->get_tahun_kriteria();
		$user = $this->session->userdata('user');
		extract($user);
		$data['nilaiall'] = $this->m_nilai->get_nilai($nik);
		$data['nilaiku'] = $this->m_nilai->get_nilainya($nik);
		$data['nilai_rata'] = $this->m_nilai->get_rata($nik);

		if($this->session->userdata('user')){
			$data["judul"] = "Nilaiku";
			$data["informasi"] = "Hasil penilaian dari karyawan bernama ".$nama.", selama menjadi karyawan di PT. Bina Dana Sejahtera.";
			$data["page"] = "nilai/index";
			$data["halaman"][] = array("link"=>"nilaiku","bread"=>"Nilaiku");
			$this->load->view('dashboard',$data);
		} else {
            $data["judul"] = "Nilaiku";
            $data['loginUlang'] = "stop";
            $data['all_karyawan'] = $this->m_karyawan->get_all_karyawan();
            $this->load->view('sign/in',$data);
        }
	}
}
