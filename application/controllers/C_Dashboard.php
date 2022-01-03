<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('tgl_indo');

        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        }
    }
    public function index()
    {
        $data['title'] = 'Home';
        $session_data = $this->session->userdata('masuk');

        $this->load->view('template/v_header', $data);
        $this->load->view('menu/v_dashboard');
        $this->load->view('template/v_footer');
    }

    public function dashboard()
    {
        $data['title'] = 'Dashboard';
        $data1['data_kendaraan'] = $this->m_admin->get_kendaraan()->result();

        $this->load->view('template/dashboard_header', $data);
        $this->load->view('menu/dashboard', $data1);
        $this->load->view('template/v_footer');
    }

    public function input_kendaraan()
    {
        $data['title'] = 'Admin Masuk';

        $this->load->view('template/v_header', $data);
        $this->load->view('menu/admin_masuk');
        $this->load->view('template/v_footer');
    }

    public function add_no_kendaraan()
    {
        $no_kendaraan = $this->input->post('no_kendaraan');
        $status = "sedang diuji";

        $data = array(
            'no_kendaraan' => $no_kendaraan,
            'status' => $status,
        );
        $this->m_admin->add_kendaraan($data, 'kendaraan');
        $this->session->set_flashdata('alert', 'berhasil_simpan');

        redirect('input-kendaraan');
    }


    public function keluar_kendaraan()
    {
        $data3['title'] = 'Admin Keluar';
        //$data1['data_kendaraan'] = $this->m_admin->get_uji_kendaraan()->result();
        $this->load->model('m_admin');
        $keyword = $this->input->get('keyword');
        $data = $this->m_admin->ambil_data($keyword);
        $data = array(
            'keyword'    => $keyword,
            'data_cari'        => $data
        );

        $this->load->view('template/v_header', $data3);
        $this->load->view('menu/admin_keluar', $data);
        $this->load->view('template/v_footer');
    }

    public function uji_kendaraan()
    {
        $no_kendaraan = $this->input->post('no_kendaraan');
        $status = "sedang diuji";

        $data = array(
            'no_kendaraan' => $no_kendaraan,
            'status' => $status,
        );
        $this->m_admin->add_kendaraan($data, 'kendaraan');
    }

    public function update_uji_kendaraan()
    {
        $kendaraan  = $this->input->post('id_kendaraan');
        $where = array('id_kendaraan' => $kendaraan);
        $data_kendaraan = array(
            'status' => "selesai diuji",

        );
        $this->m_admin->update_uji_kendaraan($data_kendaraan, $where);
        $this->session->set_flashdata('alert', 'berhasil_uji');

        redirect('dashboard');
    }

    public function feedback()
    {
        $data['title'] = 'Penilaian Customer';
        $data1['data_testimoni'] = $this->m_admin->get_feedback()->result();
        $data1['hasil_pengujian'] = $this->m_admin->get_testimoni_pengujian()->result();
        $this->load->view('template/v_header', $data);
        $this->load->view('menu/feedback', $data1);
        $this->load->view('template/v_footer');
    }

    function testimoni_memuaskan()
    {

        // Jika sudah ada, update

        $this->db->query("UPDATE testimoni SET memuaskan=memuaskan+1 WHERE id_testimoni = 1");
        $this->session->set_flashdata('alert', 'berhasil_testimoni');

        redirect('testimoni');
    }
    function testimoni_tidak_memuaskan()
    {

        // Jika sudah ada, update

        $this->db->query("UPDATE testimoni SET tidak_memuaskan=tidak_memuaskan+1 WHERE id_testimoni = 1");
        $this->session->set_flashdata('alert', 'berhasil_testimoni');

        redirect('testimoni');
    }
}
