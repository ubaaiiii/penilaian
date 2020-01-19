<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_nilai');
		$this->load->model('m_karyawan');
		$this->m_nilai->hitung();
	}

	public function index($nama = "")
	{	
		//load session library
		$this->load->library('session');
 
		//restrict users to go back to login if session has been set
		if($this->session->userdata('user')){
			$data["judul"] = "Dashboard";
			if ($nama==null){
				$data["informasi"] = "Berisi tentang profil web PT. Bina Dana Sejahtera dan Kampus Ubhara Jaya.";
			} else {
				$data["informasi"] = "Selamat datang ".$nama;
			}
			$data["page"] = "dashboard/index";
			$data["halaman"][] = array("link"=>"dashboard","bread"=>"Dashboard");
			$this->load->view('dashboard',$data);
		} else {
			$data["judul"] = "Dashboard";
			$data['loginUlang'] = "stop";
			$data['all_karyawan'] = $this->m_karyawan->get_all_karyawan();
			$this->load->view('sign/in',$data);
		}
		
	}
}
