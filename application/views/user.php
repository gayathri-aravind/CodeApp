<?php
defined('BASEPATH') OR exit('No direct script access allowed');

echo form_open(site_url('User/create'),array('method'=>'post'));
echo form_label('Custom Text', 'user_input');
echo form_input(array('name'=>'user_input','type'=>'text', 'autocomplete' => 'off'));
echo form_label('Email', 'user_email');
echo form_input(array('name'=>'user_email','type'=>'email', 'autocomplete' => 'off'));
echo form_submit(array('value'=>'Submit'));
echo form_close();

?>
