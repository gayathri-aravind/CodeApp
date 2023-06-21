<?php

defined('BASEPATH') OR exit('No direct script access allowed');

echo form_open(site_url('User/displayPlainCustomData'),array('method'=>'post'));
echo form_label('Record ID', 'record_id');
echo form_input(array('name'=>'record_id','type'=>'text'));
echo form_label('Encryption Key', 'encryption_key');
echo form_input(array('name'=>'encryption_key','type'=>'text'));
echo form_submit(array('value'=>'Submit'));
echo form_close();

?>
