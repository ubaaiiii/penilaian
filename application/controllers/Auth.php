<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_karyawan');
	}
 
	public function index(){
		//load session library
		$this->load->library('session');
 		
		//restrict users to go back to login if session has been set
		if($this->session->userdata('user')){
			redirect('dashboard');
		}
		else{
			$data['judul'] = "Login";
			$data['all_karyawan'] = $this->m_karyawan->get_all_karyawan();
			$this->load->view('sign/in',$data);
		}
	}
 
	public function login(){
		//load session library
		$this->load->library('session');
 
		$output = array('error' => false);
 
		$username = $this->input->post('username');
		$password = $this->input->post('password');
 
		$data = $this->m_user->login($username, $password);
 
		if($data){
			$this->session->set_userdata('user', $data);
		}
		else{
			$output['error'] = true;
		}
 
		echo json_encode($output); 
	}
 
	public function home(){
		//load session library
		$this->load->library('session');
 
		//restrict users to go to home if not logged in
		if($this->session->userdata('user')){
			redirect('dashboard');
		}
		else{
			redirect('/');
		}
 
	}
 
	public function logout(){
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('user');
		redirect(base_url());
	}
	
}