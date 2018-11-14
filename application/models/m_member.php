<?php

class m_member extends CI_Model {
    function update_data_profil($id,$nama, $email, $no_telp, $alamat) {
        $this->db->set('nama', $nama);
        $this->db->set('email', $email);
        $this->db->set('no_telp', $no_telp);
        $this->db->set('alamat', $alamat);
        $this->db->where('id', $id);
        return $this->db->update('user');
    }

    function hapus_data_member($id) {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    function get_all_member() {
        $this->db->select('*');
        $query1 = 'jenis!=2';
        $this->db->where($query1);
        $this->db->from('user');
        $query = $this->db->get();
        return $query->result();
    }

    function get_profil_member($id) {
        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->from('user');
        $query = $this->db->get();
        return $query->row();
    }

}

?>