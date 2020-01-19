<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('string');
		$this->load->model('m_nilai');
		$this->load->model('m_karyawan');
		// $this->m_nilai->hitung();
	}

	public function index()
	{	
		$email = $this->input->get('email');
		$kode = $this->input->get('kode');
		if($this->db->get_where('list_karyawan',array('email'=>$email,'recovery'=>$kode))->row_array()){
			$data['judul'] = "New Password";
			$data['email'] = $email;
			$data['all_karyawan'] = $this->m_karyawan->get_all_karyawan();
			$data['forgot'] = true;
			$this->load->view('sign/in',$data);
		} else {
			$data["judul"] = "Invalid Link";
            $data['loginUlang'] = "stop";
            $data['all_karyawan'] = $this->m_karyawan->get_all_karyawan();
            $this->load->view('sign/in',$data);
		}
	}

	public function generate()
	{
		$email = $this->input->post('email');
		$kode = random_string('alnum', 32);
		if($datanya = $this->db->get_where('list_karyawan',array('email'=>$email))->row_array()){
			$this->db->set('recovery',$kode);
			$this->db->where('email', $email);
			$this->db->update('list_karyawan');

			$data = array(
				'nama'      =>  $datanya['nama'],
				'kode'      =>  $kode,
                'email'     =>  $datanya['email']
			);

			echo json_encode($data);
		} else {
			echo json_encode(false);
		}
	}

	public function success()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$this->db->set('password',$password);
		$this->db->set('recovery','');
		$this->db->where('email', $email);
		$this->db->update('list_karyawan');

		echo json_encode(true);

	}
}
