<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$config = Array(                                                // config GMail
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'notification.ubai@gmail.com',
    'smtp_pass' => 'ketikulang23',
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '15', //in seconds
    'charset'   => 'iso-8859-1',
    'wordwrap' => TRUE,
    'crlf' => "\r\n",
    'newline' => "\r\n"
);

// $config = Array(                                                // config Mailtrap.io
//   'protocol' => 'smtp',
//   'smtp_host' => 'smtp.mailtrap.io',
//   'smtp_port' => 2525,
//   'smtp_user' => 'a66a69c23e0bbd',
//   'smtp_pass' => '6baf30d81465d4',
//   'mailtype' => 'html', //plaintext 'text' mails or 'html'
//   'crlf' => "\r\n",
//   'newline' => "\r\n"
// );
