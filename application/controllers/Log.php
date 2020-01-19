<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_nilai');
		// $this->m_nilai->hitung();
	}

	public function in()
	{
		$data["judul"] = "";
	}

	public function out()
	{
		$data["judul"] = "Logged Out";
		$this->load->view('log/out',$data);
	}
}
