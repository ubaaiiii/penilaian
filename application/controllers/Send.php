<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->helper('string');
	}


	public function mail($tipe='')
	{
		$nama = $this->input->post('nama');
		$nama = explode(' ',trim($nama));
		if($tipe=="create"){
	        $data['username'] = $this->input->post('username');
	        $data['password'] = $this->input->post('password');
		} else {
			$data['kode'] = $this->input->post('kode');
		}
		$data['nama'] = $nama[0];
        $data['email'] = $this->input->post('email');
        $data['tipe'] = $tipe;

		$this->email->from('rizqi.ubaidillah15@mhs.ubharajaya.ac.id', 'Rizqi Ubaidillah');
		$this->email->to($data['email']);

		$this->email->subject(($tipe=="create")?("Pembuatan User Berhasil!"):("Pemulihan Akun"));

		$this->email->message($this->load->view('email/emails',$data,true));

		$this->email->set_mailtype('html');
		if ($this->email->send()){
			echo "Success";
		} else {
			echo "Failed";
		}

	}

}
