<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empdata_Model extends CI_Model{

public function insertUserdata($user_input, $user_email){

    $sql_query=$this->db->insert('MyCstomText',array( 'encryptedText'=>$user_input, 'email'=>$user_email));
    $insert_id = $sql_query->insert_id();

    if($sql_query){
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