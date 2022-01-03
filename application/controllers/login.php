<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function index()
    {
        $this->load->view('menu/login');
    }

    function auth()
    {
        $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

        $cek_admin = $this->m_admin->auth_admin($username, $password);

        if ($cek_admin->num_rows() > 0) {
            $data = $cek_admin->row_array();
            $this->session->set_userdata('masuk', TRUE);
            if ($data['level'] == '1') {
                $this->session->set_userdata('ses_id', $data['id']);
                $this->session->set_userdata('ses_nama', $data['username']);
                redirect('home');
            }
        } else {

            $url = base_url('login');

            $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
					</button>
					<strong>Error!</strong> Username atau password salah
					</div>');
            redirect($url);
        }
    }


    function logout()
    {
        $this->session->sess_destroy();
        $url = base_url('login');
        redirect($url);
    }
}
