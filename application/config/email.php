<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'smtp.mailtrap.io', 
    'smtp_port' => 2525,
    'smtp_user' => 'a66a69c23e0bbd',
    'smtp_pass' => '6baf30d81465d4',
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '15', //in seconds
    'charset' => 'utf-8',
    'wordwrap' => TRUE,
    'crlf' => "\r\n",
    'newline' => "\r\n"
);