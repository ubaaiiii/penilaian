<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'rizqi.ubaidillah15@mhs.ubharajaya.ac.id',
    'smtp_pass' => 'ketikulang23',
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '15', //in seconds
    'charset'   => 'iso-8859-1',
    'wordwrap' => TRUE,
    'crlf' => "\r\n",
    'newline' => "\r\n"
);
