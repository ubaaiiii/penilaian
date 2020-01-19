<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->helper('string');
        $this->load->model('m_nilai');
        $this->load->model('m_kriteria');
        $this->load->model('m_karyawan');
        $this->load->library('session');
        // $this->m_nilai->hitung();
	}


	public function karyawan()
    {
        if($this->session->userdata('user')){
            $this->load->view('data/karyawan');
        } else {
            $data["judul"] = "Data Karyawan";
            $data['loginUlang'] = "stop";
            $data['all_karyawan'] = $this->m_karyawan->get_all_karyawan();
            $this->load->view('sign/in',$data);
        }
    }

    public function dummy($id='')
    {
        if($this->session->userdata('user')){
            $data['nilaiku'] = $this->m_nilai->nilai_tiap_tahun($id);
            $data['nilai'] = $this->m_nilai->get_nilai($id);
            $data['nilai_pivot'] = $this->m_nilai->get_nilai_pivot();
            $data['all_karyawan'] = $this->m_karyawan->get_all_karyawan();
            $data['all_kriteria'] = $this->m_kriteria->get_all_kriteria();
            $data['num_kriteria'] = $this->m_kriteria->get_num_kriteria();
            $data['tahun_kriteria'] = $this->m_kriteria->get_tahun_kriteria();
            $data['num_tahun_kriteria'] = $this->m_kriteria->get_num_tahun_kriteria();
            $data['usernamenya'] = $this->m_karyawan->get_username($id);

            $this->load->view('data/dummy',$data);
        } else {
            $data["judul"] = "Data Dummy";
            $data['loginUlang'] = "stop";
            $data['all_karyawan'] = $this->m_karyawan->get_all_karyawan();
            $this->load->view('sign/in',$data);
        }
    }

    public function kriteria()
    {
        $this->load->view('data/kriteria');
    }

    public function penilaian()
    {
        $this->load->model('m_kriteria');
		$data['all_kriteria'] = $this->m_kriteria->get_all_kriteria();
        $this->load->view('data/penilaian',$data);
    }

    public function rangking()
    {
        $data['tahun'] = $this->m_kriteria->get_tahun_kriteria();
        $this->load->view('data/rangking',$data);
    }

    public function email($tipe='')
    {
        if($tipe=="daftar"){
            $val1="Pendaftaran Sukses..";
            $val2=' <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>Rizqi Ubaidillah</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>emailnya.ubai@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td>emailnya.ubai@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td>emailnya.ubai@gmail.com</td>
                        </tr>
                    </table>';
            $val3="https://i.imgur.com/ZhswkvL.png";
            $val4="Login..";
            $val5=base_url();
        } else if($tipe=="lupa"){
            $val1="Lupa Password..";
            $val2='Anda telah request lupa password pada halaman login Penilaian Bina Dana Sejahtera, klik <b>tombol</b> berikut untuk langsung ubah password Anda dengan yang baru.<br>Jika Anda tidak merasa melakukannya, abaikan email ini.';
            $val3="https://i.imgur.com/FBKi7AI.png";
            $val4="Recovery..";
            $val5=base_url('karyawan');
        } else {
            $val1="null";
            $val2='null';
            $val3="null";
            $val4="null";
            $val5="null";
        }
        $data['val1']=$val1;
        $data['val2']=$val2;
        $data['val3']=$val3;
        $data['val4']=$val4;
        $data['val5']=$val5;

        $this->load->view('email/emails',$data);

    }

}
