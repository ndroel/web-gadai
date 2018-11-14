<?php

class m_transaksi extends CI_Model {

    //transaksi member
    function get_transaksi_member($id) {
        $this->db->select('transaksi.id,foto_barang,transaksi.harga,bibit_pupuk.foto,satuan,status,tgl_transaksi');
        $this->db->from('transaksi');
        $this->db->join('bibit_pupuk', 'transaksi.id_bibit = bibit_pupuk.id');
        $this->db->where('id_user', $id);
        $query = $this->db->get();
        return $query->result();
    }

    //hapus transaksi
    function batal_transaksi($id) {
        $this->db->where('id', $id);
        $this->db->delete('transaksi');
    }

    //semua transaksi admin
    function get_all_data() {
        $this->db->select('user.id as iduser,foto_barang,perjanjian,foto_barang_user,id_bibit,harga,satuan,status,tgl_transaksi,tgl_tebus,user.username,user.nama,transaksi.id');
        $this->db->from('transaksi');
        $this->db->join('user', 'transaksi.id_user = user.id');
        $query = $this->db->get();
        return $query->result();
    }

    function update_status_transaksi($id, $barang, $perjanjian) {
        $this->db->set('foto_barang_user', $barang);
        $this->db->set('perjanjian', $perjanjian);
        $this->db->set('status', 2);
        $this->db->where('id', $id);
        return $this->db->update('transaksi');
    }

    function tebus($id,$tgl,$barang) {
        $this->db->set('status', 3);
        $this->db->set('tgl_tebus', $tgl);
        $this->db->set('bibit_user', $barang);
        $this->db->where('id', $id);
        return $this->db->update('transaksi');
    }

    function save_transaksi($data, $idbibit, $jumlah, $hargabarang,$namabarang,$fotobarang) {
        $this->db->set('jumlah', ($data->jumlah - $jumlah));
        $this->db->where('id', $idbibit);
        $this->db->update('bibit_pupuk');
        $data = array(
            'id_user' => $this->session->userdata('id'),
            'id_bibit' => $idbibit,
            'harga' => $hargabarang,
            'nama_barang' => $namabarang,
            'satuan' => $jumlah,
            'status' => 1,
            'foto_barang' => $fotobarang,
            'tgl_transaksi' => date("Y-m-d H:i:s")
        );
        return $this->db->insert('transaksi', $data);
    }

}

?>