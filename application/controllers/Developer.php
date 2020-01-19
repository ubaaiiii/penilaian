<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Developer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_nilai');
		$this->load->library('session');
		// $this->m_nilai->hitung();
	}

	public function index($nama = "")
	{	
		//load session library
 
		//restrict users to go back to login if session has been set
		if($this->session->userdata('user')){
			$data["judul"] = "Developer";
			if ($nama==null){
				$data["informasi"] = "Berisi tentang profil developer web ini.";
			} else {
				$data["informasi"] = "Selamat datang ".$nama;
			}
			$data["page"] = "developer/index";
			$data["halaman"][] = array("link"=>"developer","bread"=>"Developer");
			$this->load->view('dashboard',$data);
			}
		else{
            $data["judul"] = "Developer";
            $data['loginUlang'] = "stop";
            $data['all_karyawan'] = $this->m_karyawan->get_all_karyawan();
            $this->load->view('sign/in',$data);
        
		}

	}
}
