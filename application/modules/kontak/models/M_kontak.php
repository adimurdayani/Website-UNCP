<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_kontak extends CI_Model
{

    public function delete($id)
    {
        $this->db->where_in('id', $id);
        $this->db->delete('tb_kontak');
    }
}

/* End of file m_kontak.php */
