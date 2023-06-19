<?php

namespace MiladRahimi\PhpCrypt;
use MiladRahimi\PhpCrypt\Symmetric;
use PHPMailer\PHPMailer\PHPMailer; 


require_once "vendor/autoload.php";

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
		$this->load->model('usersModel', 'user');
		$this->load->view('user');
	}

	public function create(){
		$this->load->library('form_validation');

		$rules = array(
			array(
					'field' => 'user_input',
					'label' => 'Custom Text',
					'rules' => 'required'
			),
			array(
                'field' => 'user_email',
                'label' => 'Email Address',
                'rules' => 'required'
            )
		);
	
		$this->form_validation->set_rules($rules);
		$this->form_validation->run();

		if ($this->form_validation->run() == FALSE) {
			$key = Symmetric::generateKey(); // Generating key in random
			$symmetric = new Symmetric($key);

			// Encrypting the user input using the random key
			$user_input=$this->input->post('user_input');
			$user_email=$this->input->post('user_email');
			$encryptedData = $symmetric->encrypt($user_input);
			
			// Inserting the recordID and encryptedData into the "MyCstomText" table
			$insertId = $this->user->insertUserdata($encryptedData, $user_email);

			if($insertId){
				$data['show_data'] = ['randomkey' => $key, 'recordId' => $insertId];

				// Get user email from the database and pass it to the PHPMailer
				$userData = $this->user->getUserData($insertId);
				$emailResult = $this->send($userData->email, $key);

				// If email send successfully
				if($emailResult){
					// Loading the search page, where user can see the decrypted text
					$this->load->view('usersearch', $data);
				}else{
					// Loading the page with RecordID and encryption key
					$this->load->view('user', $data);
				}
			}
        } else {
            redirect(base_url('/'));
        }
	}

	public function send($userEmail, $encryptionKey){
        // PHPMailer object
        $mail = new PHPMailer;
        
        // SMTP configuration
		$my_config = $this->config->load('email', true);
        $mail->isSMTP();
        $mail->Host     = $my_config['smtp_host'];
        $mail->SMTPAuth = true;
        $mail->Username = $my_config['smtp_user'];
        $mail->Password = $my_config['smtp_pass'];
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = $my_config['smtp_port'];
        
        $mail->setFrom('info@inbox.mailtrap.io');
        
        // Add a recipient
        $mail->addAddress($userEmail);
        
        // Email subject
        $mail->Subject = 'Your Encryption key';
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mailContent = "<h1>Encryption key of yours</h1>
            <p>This is your encryption key:".$encryptionKey." </p>";
        $mail->Body = $mailContent;
        
        // Send email
        if(!$mail->send()){
            return 0;
        }else{
            return 1;
        }
    }

	public function getDecyptedInput(){
		$record_id=$this->input->post('record_id');
		$encryption_key=$this->input->post('encryption_key');

		if(isset($record_id) && isset($encryption_key)){
			$symmetric = new Symmetric($encryption_key);

			// Get encryptedData for the corresponding encryption key
			$userData = $this->user->getUserData($record_id);

			$data['decryptedText'] = $symmetric->decrypt($userData->encryptedText); 

			$this->load->view('usersearch', $data);

		}
	}
}
