<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_karyawan');
        $this->load->model('m_kriteria');
		$this->load->model('m_nilai');
        $this->load->library('session');
        // $this->m_nilai->hitung();
	}

	public function karyawan($judul = "",$id=null)
    {
        if($this->session->userdata('user')){
            $data['all_karyawan'] = $this->m_karyawan->get_all_karyawan();
            $data['karyawanNik'] = $this->m_karyawan->get_karyawan($id);
            switch($judul){
                case "t": {
                            $judul_baru = "Tambah Data Karyawan";
                            $sbg = "tambah";
                            break;
                          }
                case "e": {
                            $judul_baru = "Edit Data Karyawan";
                            $sbg = "editD";
                            break;
                          }
                case "v": {
                            $judul_baru = "Data Karyawan";
                            $sbg = "view";
                            break;
                          }
                default : {
                            $judul_baru = "Edit Profil";
                            $sbg = "editP";
                            break;
                          }
            }
            $data['judul_modal'] = $judul_baru;
            $data['sebagai'] = $sbg;
            $this->load->view('modals/karyawan',$data);
        } else {
            $data["judul"] = "Modal Karyawan";
            $data['loginUlang'] = "stop";
            $data['all_karyawan'] = $this->m_karyawan->get_all_karyawan();
            $this->load->view('sign/in',$data);
        }
    }

    public function kriteria($judul = "",$id=null)
    {
        if($this->session->userdata('user')){
            $data['all_kriteria'] = $this->m_kriteria->get_all_kriteria();
            $data['detail_kriteria'] = $this->m_kriteria->get_kriteria($id);
            switch($judul){
                case "t": {
                            $judul_baru = "Tambah Data Kriteria";
                            $sbg = "tambah";
                            break;
                          }
                case "v": {
                            $judul_baru = "Data Kriteria";
                            $sbg = "view";
                            break;
                          }
                default : {
                            $judul_baru = "Edit Data Kriteria";
                            $sbg = "edit";
                            break;
                          }
            }
            $data['judul_modal'] = $judul_baru;
            $data['sebagai'] = $sbg;
            $this->load->view('modals/kriteria',$data);
        } else {
            $data["judul"] = "Modal Kriteria";
            $data['loginUlang'] = "stop";
            $data['all_karyawan'] = $this->m_karyawan->get_all_karyawan();
            $this->load->view('sign/in',$data);
        }
    }

    public function penilaian($judul = "",$nik = "")
    {
        if($this->session->userdata('user')){
            $data['detail_karyawan'] = $this->m_karyawan->get_karyawan($nik);
            $data['all_karyawan'] = $this->m_karyawan->get_all_karyawan();
						$data['all_karyawans'] = $this->m_karyawan->get_all_karyawans();
            $data['karyawan_belum_dinilai'] = $this->m_karyawan->karyawan_belum_dinilai();
						$data['karyawan_belum_dinilais'] = $this->m_karyawan->karyawan_belum_dinilais();
            $karyawan = $this->m_karyawan->get_karyawan($nik);
            $data['tahun_kriteria'] = $this->m_kriteria->get_tahun_kriteria();
        	$data['all_kriteria'] = $this->m_kriteria->get_all_kriteria();
            $data['list_nilai'] = $this->m_nilai->get_list_nilai();
            $data['nik'] = $nik;
            $data['nama'] = $karyawan['nama'];
        	switch($judul){
        		case "t": {
        					$judul_baru = "Tambah Data Nilai";
        					$sbg = "tambah";
        					break;
        				  }
                case "v": {
                            $judul_baru = "Data Nilai";
                            $sbg = "view";
                            break;
                          }
        		default : {
        					$judul_baru = "Edit Data Nilai";
        					$sbg = "edit";
        					break;
        				  }
        	}
        	$data['judul_modal'] = $judul_baru;
        	$data['sebagai'] = $sbg;
            $this->load->view('modals/penilaian',$data);
        } else {
            $data["judul"] = "Modal Penilaian";
            $data['loginUlang'] = "stop";
            $data['all_karyawan'] = $this->m_karyawan->get_all_karyawan();
            $this->load->view('sign/in',$data);
        }
    }

}
