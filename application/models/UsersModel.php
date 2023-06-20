<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModel extends CI_Model{

public function insertUserdata($user_input, $user_email){

    $this->db->insert('codeApp.MyCstomText',array( 'encryptedText'=>$user_input, 'email'=>$user_email));
    $insert_id = $this->db->insert_id();

    if($insert_id){
        return $insert_id;
    }else{
        return 0;
    }

}

public function getUserData($recordId) {
    $query = $this->db->get_where('MyCstomText', array('recordID' => $recordId));
    return $query->result();
}

}