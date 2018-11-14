<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class c_account extends CI_Controller {

    function index() {
        $this->load->helper('url');
        if ($this->session->userdata('jenis') == null) {
            $this->load->model('m_bibit');
            $data = array(
                'baru' => $this->m_bibit->get_all_data(),
                'bibit' => $this->m_bibit->get_all_bibit(),
                'pupuk' => $this->m_bibit->get_all_pupuk(),
            );
            $this->load->member('member/body', $data);
        } else {
            if ($this->session->userdata('jenis') == 1) {
                $this->load->model('m_bibit');
                $this->load->model('m_transaksi');
                $id=$this->session->userdata('jenis');
                $data = array(
                    'baru' => $this->m_bibit->get_all_data(),
                    'bibit' => $this->m_bibit->get_all_bibit(),
                    'pupuk' => $this->m_bibit->get_all_pupuk(),
                    
                );
                $this->load->member('member/body', $data);
            } else {
                $this->load->model('m_bibit');
                $this->load->model('m_transaksi');
                $this->load->model('m_member');
                $data = array(
                    'member' => $this->m_member->get_all_member(),
                    'harga' => $this->m_bibit->get_all_data(),
                    'bibit' => $this->m_bibit->get_all_bibit(),
                    'pupuk' => $this->m_bibit->get_all_pupuk(),
                    'transaksi' => $this->m_transaksi->get_all_data()
                );
                $this->load->admin('admin/body', $data);
            }
        }
    }

    function register() {
        $this->load->helper('url');
        $this->load->member('member/register');
    }

    function login() {
        $this->load->helper('url');
        $this->load->member('member/login');
    }

    function get_data_regis() {
        $this->load->helper('security');
        $this->load->helper('url');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');
        $pass2 = $this->input->post('pass2');
        $str = do_hash($pass, 'md5');
        if ($pass2 != $pass) {
            echo'<script>alert("kombinasi password anda tidak sama");</script>';
        } else {
            $this->load->model('m_account');
            $data = $this->m_account->insert_data_regis($username, $str, $email, 1);
            echo "<script>alert('Registrasi Berhasil, Silahkan login');window.location.href='login';</script>";
        }
    }

    function validasi_user() {
        $this->load->helper('security');
        $this->load->helper('url');
        $username = $this->input->post('username');
        $pass = $this->input->post('pass');
        $pass1 = do_hash($pass, 'md5');
        $this->load->model('m_account');
        $data = $this->m_account->cek_user($username, $pass1);
        if ($data != null) {
            if ($data->pass === $pass1) {
                $newdata = array(
                    'username' => $username,
                    'jenis' => $data->jenis,
                    'id' => $data->id,
                    'status' => TRUE
                );
                $this->session->set_userdata($newdata);
                if ($data->jenis == 1) {
                    redirect('?');
                } else if ($data->jenis == 2) {
                    redirect('?');
                }
            } else {
                echo"<script>alert('Password yang anda masukkan salah');window.location.href='login';</script>";
            }
        } else {
            echo "<script>alert('Username tidak ditamukan, silahkan registrasi');window.location.href='register';</script>";
        }
    }

    function end_session() {
        $this->load->helper('url');
        $this->session->sess_destroy();
        redirect(site_url());
    }

}

?>