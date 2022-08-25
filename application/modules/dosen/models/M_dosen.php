<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_dosen extends CI_Model
{

    public function get_data()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('tb_dosen')->result();
    }

    public function get_data_dosen($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('tb_dosen')->row();
    }

    public function tambah()
    {
        $data = [
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'kelamin' => $this->input->post('kelamin'),
            'alamat' => $this->input->post('alamat'),
            'tanggal' => date('d M Y'),
            'user_id' => 1
        ];
        return $this->db->insert('tb_dosen', $data);
    }

    public function edit($id)
    {
        $data = [
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'kelamin' => $this->input->post('kelamin'),
            'alamat' => $this->input->post('alamat'),
            'tanggal' => date('d M Y'),
            'user_id' => 1
        ];
        $this->db->where('id', $id);
        return $this->db->update('tb_dosen', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('tb_dosen');
    }

    public function hapus_all($id)
    {
        $this->db->where_in('id', $id);
        return $this->db->delete('tb_dosen');
    }

    public function validasi()
    {
        $this->form_validation->set_rules('nip', 'nip', 'trim|required');
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('kelamin', 'kelamin', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
    }
}

/* End of file M_nilai.php */
