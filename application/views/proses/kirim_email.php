<?php

	$this->load->config('settings/email');
    $this->load->library('email');
    
    $from = $this->config->item('smtp_user');
    $to = $this->input->get('email');
    $data['nama'] = $this->input->get('nama');
    $data['username'] = $this->input->get('username');
    $data['password'] = $this->input->get('password');
    $data['email'] = $this->input->get('email');
    $subject = "PT. Bina Dana Sejahtera: Create Account Success";

    $this->email->set_newline("\r\n");
    $this->email->from($from);
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message($this->load->view('email/email', $data, TRUE));
    $this->email->set_mailtype('html');
    return $this->email->send();
    // if ($this->email->send()) {
    //     echo 'Your Email has successfully been sent.';
    // } else {
    //     show_error($to);
    // }