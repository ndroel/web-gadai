<?php

class m_account extends CI_Model {

    function insert_data_regis($username, $pass, $email,$jenis) {
        $data= array(
            'username'=>$username,
            'pass'=>$pass,
            'email'=>$email,
            'jenis'=>$jenis
        );
        $this->db->insert('user', $data);
    }

    function cek_user($username, $pass) {
        $this->db->select('pass,jenis, id');
        $this->db->from('user');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->row();
    }

}

?>