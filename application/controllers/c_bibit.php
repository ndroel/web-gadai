<?php

class c_bibit extends CI_Controller {

    function index() {
        $id = $this->uri->segment(3);
        $this->load->model('m_bibit');
        $data['data'] = $this->m_bibit->get_data($id);
        $this->load->member('member/detail_bibit', $data);
    }

    function get_all_data() {
        $this->load->model('m_bibit');
        $data['data'] = $this->m_bibit->get_all_data();
        if ($this->session->userdata('jenis') == 2) {
            $this->load->admin('admin/lihat_bibit', $data);
        } else {
            $this->load->member('member/lihat_bibit', $data);
        }
    }

    function edit_data() {
        if ($this->input->post('submit')) {
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $harga = $this->input->post('harga');
            $jumlah = $this->input->post('jumlah');
            $jenis = $this->input->post('jenis');
            $detail = $this->input->post('detail');
            $config['upload_path'] = './admin/images/bibit_pupuk/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 1000000;
            $namafile = time();
            $config['file_name'] = $namafile;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            } else {
                $foto = $this->upload->data('file_name');
            }
            $this->load->model('m_bibit');
            if ($this->m_bibit->update_data($id, $nama, $harga, $jumlah, $jenis, $foto,$detail)) {
                redirect('c_bibit/get_all_data');
            }
        } else if ($this->input->post('cancel')) {
            redirect('c_bibit/get_all_data');
        } else {
            $this->load->model('m_bibit');
            $id = $this->input->post('id');
            $data['data'] = $this->m_bibit->get_data($id);
            $this->load->admin('admin/edit_bibit', $data);
        }
    }

    function hapus_data() {
        $id = $this->input->post('id');
        $this->load->model('m_bibit');
        $this->m_bibit->hapus_data($id);
        redirect('c_bibit/get_all_data');
    }

    function tambah() {
        if ($this->input->post('submit')) {
            $detail = $this->input->post('detail');
            $nama = $this->input->post('nama');
            $harga = $this->input->post('harga');
            $jumlah = $this->input->post('jumlah');
            $jenis = $this->input->post('jenis');
            $config['upload_path'] = './admin/images/bibit_pupuk/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 1000000;
            $namafile = time();
            $config['file_name'] = $namafile;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            } else {
                $foto = $this->upload->data('file_name');
            }
            $this->load->model('m_bibit');

            $this->m_bibit->insert_data($nama, $harga, $jumlah, $jenis,$detail, $foto);
            redirect('c_bibit/get_all_data');
        } else if ($this->input->post('cancel')) {
            redirect('c_bibit/get_all_data');
        } else {
            $this->load->admin('admin/add_bibit');
        }
    }

}

?>