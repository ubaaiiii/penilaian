<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('string');
		$this->load->model('m_kriteria');
	}

	public function nilai(){
		$data['all_kriteria'] = $this->m_kriteria->get_all_kriteria();
        $data['num_kriteria'] = $this->m_kriteria->get_num_kriteria();
		$this->load->view('cari/nilai',$data);
	}

        public function kriteria(){
                $this->load->view('cari/kriteria');
        }

	public function email($tipe=""){
        	$data['nama'] = "Rizqi Ubaidillah";
                $data['username'] = "RIZUBA2308";
                $data['password'] = "BA2308@!";
                $data['email'] = "emailnya.ubai@gmail.com";
                $data['kode'] = random_string('alnum', 32);
                $data['tipe'] = $tipe;
		$this->load->view('email/emails',$data);
	}

}
