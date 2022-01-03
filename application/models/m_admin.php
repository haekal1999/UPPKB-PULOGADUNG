<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_admin extends CI_Model
{

    function auth_admin($username, $password)
    {
        $admin = $this->db->query("SELECT * FROM admin WHERE username='$username' AND password=('$password')");
        return $admin;
    }

    public function check_login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function add_kendaraan($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function get_kendaraan()
    {
        return $this->db->get('kendaraan');
    }

    public function get_uji_kendaraan()
    {
        return  $this->db->get_where("kendaraan", array('status' => 'sedang diuji'));
    }

    public function edit_uji_kendaraan($id_kendaraan)
    {
        $this->db->select('*');
        return $this->db->get_where('kendaraan', $id_kendaraan);
    }

    public function update_uji_kendaraan($data_kendaraan, $where)
    {
        $this->db->update('kendaraan', $data_kendaraan, $where);
    }

    public function get_feedback()
    {
        return $this->db->get('testimoni');
    }

    public function get_testimoni_pengujian()
    {
        $this->db->select('*');
        $this->db->from('kendaraan');
        $this->db->where('status', 'selesai diuji');

        $this->db->order_by('id_kendaraan', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }

    public function ambil_data($keyword = null)
    {
        $this->db->select('*');
        $this->db->from('kendaraan');
        $this->db->where('status', 'sedang diuji');

        if (!empty($keyword)) {
            $this->db->like('no_kendaraan', $keyword);
        }
        return $this->db->get()->result_array();
    }
}
