<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_home extends CI_Model
{

    public function get_berita($limit, $start, $keyword = null)
    {
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->join('users', 'tb_berita.user_id = users.id', 'left');
        if ($keyword) {
            $this->db->like('judul_berita', $keyword);
        }
        $this->db->order_by('tb_berita.id', 'desc');
        $this->db->limit($limit, $start);
        return $this->db->get()->result();
    }

    public function get_detail_berita($id)
    {
        $query =
            " SELECT `tb_berita`.*,`tb_kategori`.`kategori`, `users`.`first_name`
                FROM `tb_berita` 
                JOIN `tb_kategori` ON `tb_berita`.`kategori_id` = `tb_kategori`.`id`
                JOIN `users` ON `tb_berita`.`user_id` = `users`.`id`
                WHERE `tb_berita`.`id` = $id
                ";
        return $this->db->query($query)->row();
    }

    public function layanan()
    {
        $this->db->order_by('tb_layanan.id', 'desc');
        $this->db->limit(9);
        return $this->db->get('tb_layanan')->result();
    }

    public function berita()
    {
        $this->db->order_by('tb_berita.id', 'desc');
        $this->db->limit(3);
        return $this->db->get('tb_berita')->result();
    }

    public function get_layanan($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('tb_layanan');
        $this->db->order_by('tb_layanan.id', 'desc');
        $this->db->limit($limit, $start);
        return $this->db->get()->result();
    }

    public function berita_update()
    {
        $this->db->order_by('tb_berita.id', 'desc');
        $this->db->limit(2);
        return $this->db->get('tb_berita')->result();
    }
}


/* End of file m_berita.php */
