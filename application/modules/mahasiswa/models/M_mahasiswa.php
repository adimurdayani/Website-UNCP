<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_mahasiswa extends CI_Model
{

    public function get_data()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('tb_mahasiswa')->result();
    }

    public function tambah()
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'kelamin' => $this->input->post('kelamin'),
            'semester' => $this->input->post('semester'),
            'alamat' => $this->input->post('alamat'),
            'user_id' => 1

        ];
        return $this->db->insert('tb_mahasiswa', $data);
    }

    public function edit()
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'kelamin' => $this->input->post('kelamin'),
            'semester' => $this->input->post('semester'),
            'alamat' => $this->input->post('alamat'),
            'user_id' => 1

        ];
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('tb_mahasiswa', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('tb_mahasiswa');
    }

    public function hapus_all($id)
    {
        $this->db->where_in('id', $id);
        return $this->db->delete('tb_mahasiswa');
    }

    public function validasi()
    {
        $this->form_validation->set_rules('nim', 'nim', 'trim|required');
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('semester', 'semester', 'trim|required');
        $this->form_validation->set_rules('kelamin', 'kelamin', 'trim|required');
    }
}

/* End of file M_mahasiswa.php */
