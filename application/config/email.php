<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

// $config['email_settings'] = [
// 'protocol' => 'smtp',
// 'smtp_host' => 'sandbox.smtp.mailtrap.io',
// 'smtp_port' => 2525,
// 'smtp_user' => '25bb92a8501a93',
// 'smtp_pass' => '100d0893f1d321',
// 'crlf' => "\r\n",
// 'newline' => "\r\n"
// ];

$config['email_settings'] = [
    'protocol' => 'smtp',
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 465,
    'smtp_user' => 'xxx@domain.com',
    'smtp_pass' => 'xxxxx',
    'crlf' => "\r\n",
    'newline' => "\r\n"
    ];

?>
