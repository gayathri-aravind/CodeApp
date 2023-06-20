<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
        
    class Email extends CI_Controller{
    
        function  __construct(){
            parent::__construct();
        }
        
        function send($userEmail, $encryptionKey){
            echo '***Start***';exit;
            // Load PHPMailer library
            $this->load->library('phpmailer_lib');
    
            // PHPMailer object
            $mail = $this->phpmailer_lib->load();
    
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
            $mail->isHTML(true);
            
            // Email body content
            $mailContent = "<h1>Encryption key of yours</h1>
                <p>This is your encryption key:".$encryptionKey." </p>";
            $mail->Body = $mailContent;
            echo 'mail<pre>';
            print_r($mail);exit;
    
            // Send email
            if(!$mail->send()){
                return 0;
            }else{
                return 1;
            }
        }
    
    }
?>