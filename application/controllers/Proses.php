<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_kriteria');
		$this->load->model('m_karyawan');
		$this->load->model('m_nilai');
    }

    public function simpan($table=""){
        switch ($table) {
            case 'karyawan':
                $data = $this->m_karyawan->proses_karyawan();
                echo json_encode($data);
                break;
            case 'kriteria':
                $data = $this->m_kriteria->proses_kriteria();
                echo json_encode($data);
                break;
            case 'nilai':
                $data = $this->m_nilai->proses_nilai();
                echo json_encode($data);
                break;
            default:
                $this->load->view();
                break;
        }
		$this->m_nilai->hitung();
	}

    public function cariTahun($tahun='')
    {
        return $this->m_kriteria->get_tahun_by($tahun);
    }

	public function kirim_email($tipe='')
	{
		$this->load->config('settings/email');
        $this->load->library('email');
        
        // $kiriman = $this->input->post('nama');

        // $from = $this->config->item('smtp_user');
        $to = $this->input->get('email');
        $data['nama'] = $this->input->get('nama');
        $data['username'] = $this->input->get('username');
        $data['password'] = $this->input->get('password');
        $data['email'] = $to;
        
        $subject = "PT. Bina Dana Sejahtera: Penilaian Karyawan";

        $this->email->set_newline("\r\n");
        $this->email->from('no-reply@razaki.com','Task-IT');
        $this->email->to($to);
        $this->email->subject($subject);

        if($tipe=="daftar"){
            $val1="Pendaftaran Sukses..";
            $val2=" <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{$data['nama']}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{$data['email']}</td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td>{$data['username']}</td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td>{$data['password']}</td>
                        </tr>
                    </table>";
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
       
        $this->email->message($this->load->view('email/emails', $data, TRUE));
        $this->email->set_mailtype('html');
        if ($this->email->send()){
        	echo "Berhasil";
        } else {
        	echo "Gagal Kirim Email!<br>";
        	var_dump($data);
        }
	}

}
