<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct() {

        parent::__construct();
    }

    public function index()
    {

    }

    public function send($email, $subject, $message){
		// Load PHPMailer library
		$this->load->library('phpmailer_lib');

		// PHPMailer object
		$mail = $this->phpmailer_lib->load();

		// SMTP configuration
		$my_config = $this->config->load('email', true); // Loading the email config file
		// var_dump($my_config); // bool(true)
		$email_settings = $this->config->item('email_settings', 'email'); // Getting the value of $config['email_settings] from 'email' config file
		/*
		var_dump($email_settings);
		array(7) { ["protocol"]=> string(4) "smtp" ["smtp_host"]=> string(24) "sandbox.smtp.mailtrap.io" ["smtp_port"]=> int(2525) ["smtp_user"]=> string(14) "25bb92a8501a93" ["smtp_pass"]=> string(14) "100d0893f1d321" ["crlf"]=> string(2) " " ["newline"]=> string(2) " " }
		*/
		
		$mail->isSMTP();
		$mail->Host     = $email_settings['smtp_host'];
		$mail->SMTPAuth = true;
		$mail->Username = $email_settings['smtp_user'];
		$mail->Password = $email_settings['smtp_pass'];
		$mail->SMTPSecure = 'ssl';
		$mail->Port     = $email_settings['smtp_port'];

		$mail->setFrom('info@ziffity.com', 'Mailtrap');

		// Add a recipient
		$mail->addAddress($email);

		// Email subject
		$mail->Subject = $subject;
		$mail->isHTML(true);

		$mail->SMTPOptions = array(
			'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
			)
		);
		
		// Email body content
		$mail->Body = $message;
        
		// Send email
		if(!$mail->send()){
			// echo 'Email not send successfully';
			return 0;
		}else{
			// echo 'Email send successfully';
			return 1;
		}
	}

}

?>