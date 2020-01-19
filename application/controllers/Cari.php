<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
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
        	$data['nama'] = $this->input->get('nama');
                $data['username'] = $this->input->get('username');
                $data['password'] = $this->input->get('password');
                $data['email'] = $this->input->get('email');
                $data['tipe'] = $tipe;
                $data['val4'] = "Pulihkan Akun!";
                $data['val5'] = base_url('pulihkan');
		$this->load->view('email/emails',$data);
	}

}
