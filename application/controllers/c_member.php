<?php

class c_member extends CI_Controller {

    
    function edit() {
        $this->load->model('m_member');
        if ($this->session->userdata('jenis') == 1) {
            $id = $this->session->userdata('id');
            $data['data'] = $this->m_member->get_profil_member($id);
            $this->load->member('member/edit_profil', $data);
        } else {
            $id = $this->input->post('id');
            $data['data'] = $this->m_member->get_profil_member($id);
            $this->load->admin('admin/edit_member', $data);
        }
    }

    function update_profil_baru() {
        if ($this->input->post('simpan')) {
            $this->load->model('m_member');
            $nama = $this->input->post('nama');
            $id = $this->input->post('id');
            $email = $this->input->post('email');
            $no_telp = $this->input->post('no_telp');
            $alamat = $this->input->post('alamat');
            if ($this->m_member->update_data_profil($id, $nama, $email, $no_telp, $alamat)) {
                if ($this->session->userdata('jenis') == 1) {
                    echo "<script>alert('Update Berhasil!');window.location.href='get_profil_member';</script>";
                } else {
                    echo "<script>alert('Update Berhasil!');window.location.href='get_all_member';</script>";
                }
            }
        } else if ($this->input->post('batal')) {
            if ($this->session->userdata('jenis') == 1) {
                redirect('c_member/get_profil_member');
            } else {
                redirect('c_member/get_all_member');
            }
        }
    }

    function hapus_member() {
        $id = $this->input->post('id');
        $this->load->model('m_member');
        $this->m_member->hapus_data_member($id);
        redirect('c_member/get_all_member');
    }

    function get_all_member() {
        $this->load->model('m_member');
        $data['data'] = $this->m_member->get_all_member();
        $this->load->admin('admin/lihat_member', $data);
    }

    function get_profil_member() {
        $id = $this->session->userdata('id');
        $this->load->model('m_member');
        $data['data'] = $this->m_member->get_profil_member($id);
        $this->load->member('member/profil', $data);
    }

}

?>