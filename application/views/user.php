<?php
defined('BASEPATH') OR exit('No direct script access allowed');

echo form_open(site_url('User/create'),array('method'=>'post'));
echo form_input(array('name'=>'user_input','type'=>'text'));
echo form_input(array('name'=>'user_email','type'=>'email'));
echo form_submit(array('value'=>'Submit'));
echo form_close();

?>
