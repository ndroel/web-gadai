<?php

class c_transaksi extends CI_Controller {

    function get_transaksi_member() {
        $id = $this->session->userdata('id');
        $this->load->model('m_transaksi');
        $data['data'] = $this->m_transaksi->get_transaksi_member($id);
        $this->load->member('member/lihat_transaksi', $data);
    }

    function batal_transaksi() {
        $id = $this->input->post('id');
        $this->load->model('m_transaksi');
        $this->m_transaksi->batal_transaksi($id);
        if ($this->session->userdata('jenis') == 1) {
            redirect('c_transaksi/get_transaksi_member');
        } else {
            redirect('c_transaksi/get_all_transaksi');
        }
    }

    function get_all_transaksi() {
        $this->load->model('m_transaksi');
        $data['data'] = $this->m_transaksi->get_all_data();
        $this->load->admin('admin/lihat_transaksi', $data);
    }

    function validasi_transaksi() {
        $id = $this->uri->segment(3);
        $username = $this->input->post('username');
        if ($this->input->post('validate')) {
            $this->load->model('m_transaksi');
            $username = $this->input->post('username');
            $id = $this->uri->segment(3);
            $iduser = $this->input->post('iduser');
            $config['upload_path'] = './admin/images/validasi/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 1000000;
            $namafile = $id . $username;
            $config['file_name'] = $namafile;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('barang')) {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            } else {
                $barang = $this->upload->data('file_name');
            }
            if (!$this->upload->do_upload('surat')) {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            } else {
                $perjanjian = $this->upload->data('file_name');
            }
            $this->m_transaksi->update_status_transaksi($id, $barang, $perjanjian);
            redirect('c_transaksi/get_all_transaksi');
        } else if ($this->input->post('cancel')) {
            redirect('c_transaksi/get_all_transaksi');
        } else {
            $data = array('id' => $id, 'username' => $username);
            $this->load->admin('admin/validasi', $data);
        }
    }

    function proses_tebus() {
        $this->load->model('m_transaksi');
        if ($this->input->post('tebus')) {
            $username = $this->session->userdata('username');
            $iduser = $this->session->userdata('id');
            $id = $this->input->post('id');
            $tgl = $this->input->post('tgl_tebus');
            $config['upload_path'] = './admin/images/barang_user/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 1000000;
            $namafile = $id . $username;
            $config['file_name'] = $namafile;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('bibit')) {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            } else {
                $barang = $this->upload->data('file_name');
            }
            $this->m_transaksi->tebus($id, $tgl, $barang);
            redirect('c_transaksi/get_transaksi_member');
        } else if ($this->input->post('cancel')) {
            redirect('c_transaksi/get_transaksi_member');
        } else {
            $this->load->member('member/tebus');
        }
    }

    function hitung_harga() {
        $this->load->model('m_bibit');
        if (!$this->session->userdata('id')) {
            redirect('c_account/login');
        } else {
            $data['jml'] = 0;
            $data['harga'] = 0;
            $data['nama'] = "";
            $data['fotobarang'] = "";
            $data['data_bibit'] = $this->m_bibit->get_all_data();
            $data['data_terpilih'] = $this->m_bibit->get_data(1);
            if ($this->uri->segment(3)) {
                $data['data_terpilih'] = $this->m_bibit->get_data($this->uri->segment(3));
            }
            if ($this->input->post('hitung')) {
                $id = $this->input->post('jenis');
                $nama = $this->input->post('nama');
                $harga = $this->input->post('harga');
                $foto = $this->input->post['foto'];
                $terpilih = $this->m_bibit->get_data($id);
                $bisa_diambil = floor($harga / $terpilih->harga);
                if ($bisa_diambil > $terpilih->jumlah) {
                    $pesan = "Maaf stok bibit kurang";
                } else {
                    $pesan = $bisa_diambil;
                    $config['upload_path'] = './admin/images/barang/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = 1000000;
                    $namafile = rand(0, 100) . $this->session->userdata('username');
                    $config['file_name'] = $namafile;
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('foto')) {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                    } else {
                        $foto = $this->upload->data('file_name');
                    }
                }
                $data['jml'] = $pesan;
                $data['nama'] = $nama;
                $data['harga'] = $harga;
                $data['fotobarang'] = $foto;
                $data['data_terpilih'] = $terpilih;
                $this->load->member('member/gadaikan', $data);
            } else if ($this->input->post('cancel')) {
                redirect("c_account");
            } else {
                $this->load->member('member/gadaikan', $data);
            }
        }
    }

    function proses_gadai() {
        $this->load->model('m_transaksi');
        $this->load->model('m_bibit');
        if ($this->input->post('diambil') == "Maaf stok bibit kurang") {
            echo "<script>alert('Maaf, stok bibit kurang!');window.location.href='hitung_harga';</script>";
        } else {
            if ($this->input->post('gadai')) {
                $jumlah = $this->input->post('diambil');
                $idbibit = $this->input->post('idbibit');
                $hargabarang = $this->input->post('hargabarang');
                $namabarang = $this->input->post('namabarang');
                $fotobarang = $this->input->post('fotobarang');
                $data = $this->m_bibit->get_data($idbibit);
                $iduser = $this->session->userdata('id');
                if ($this->m_transaksi->save_transaksi($data, $idbibit, $jumlah, $hargabarang, $namabarang, $fotobarang)) {
                    echo "<script>alert('Transaksi anda sukses!');window.location.href='get_transaksi_member';</script>";
                }
            }
        }
    }

}
