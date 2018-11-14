<?php

class m_bibit extends CI_Model {

    function get_all_data() {
        $this->db->select('*');
        $this->db->from('bibit_pupuk');
        $this->db->where('id !=', 1);
        $this->db->order_by('tgl', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function get_all_pupuk() {
        $this->db->select('*');
        $this->db->from('bibit_pupuk');
        $this->db->where('jenis', 2);
        $this->db->order_by('harga', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    function get_all_bibit() {
        $this->db->select('*');
        $this->db->from('bibit_pupuk');
        $this->db->where('jenis', 1);
        $this->db->order_by('harga', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    function update_data($id, $nama, $harga, $jumlah, $jenis, $foto,$detail) {
        $this->db->set('nama', $nama);
        $this->db->set('harga', $harga);
        $this->db->set('jumlah', $jumlah);
        $this->db->set('jenis', $jenis);
        $this->db->set('foto', $foto);
        $this->db->set('detail', $detail);
        $this->db->set('tgl', date("Y-m-d H:i:s"));
        $this->db->where('id', $id);
        return $this->db->update('bibit_pupuk');
    }

    function get_data($id) {
        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->from('bibit_pupuk');
        $query = $this->db->get();
        return $query->row();
    }

    function insert_data($nama, $harga, $jumlah, $jenis, $detail,$foto) {
        $data = array(
            'nama' => $nama,
            'harga' => $harga,
            'jumlah' => $jumlah,
            'jenis' => $jenis,
            'foto' => $foto,
            'detail' => $detail,
            'tgl' => date("Y-m-d H:i:s")
        );
        $this->db->insert('bibit_pupuk', $data);
    }

    function hapus_data($id) {
        $this->db->where('id', $id);
        $this->db->delete('bibit_pupuk');
    }

}
