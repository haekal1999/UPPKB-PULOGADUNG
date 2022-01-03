<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->helper('tgl_indo');
    }
    public function index()
    {
        $data['title'] = 'Penilaian Customer';
        $data1['data_testimoni'] = $this->m_admin->get_feedback()->result();
        $data1['hasil_pengujian'] = $this->m_admin->get_testimoni_pengujian()->result();

        $this->load->view('template/header_testimoni', $data);
        $this->load->view('menu/testimoni', $data1);
        $this->load->view('template/footer_testimoni');
    }



    function testimoni_memuaskan()
    {

        // Jika sudah ada, update

        $this->db->query("UPDATE testimoni SET memuaskan=memuaskan+1 WHERE id_testimoni = 1");
        $this->session->set_flashdata('alert', 'berhasil_testimoni');
    }
    function testimoni_tidak_memuaskan()
    {

        // Jika sudah ada, update

        $this->db->query("UPDATE testimoni SET tidak_memuaskan=tidak_memuaskan+1 WHERE id_testimoni = 1");
        $this->session->set_flashdata('alert', 'berhasil_testimoni');
    }
}
