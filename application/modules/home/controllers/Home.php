<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
    }


    public function index()
    {
        $data['title'] = "Home";

        $ip = $this->input->ip_address();
        $date = date("Y-m-d");
        $waktu = time();
        $timeinsert = date("Y-m-d H:i:s");
        $browser = $this->agent->browser();
        $browser_versi = $this->agent->version();
        $os = $this->agent->platform();

        // cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
        $cek_ip = $this->db->query("SELECT * FROM tb_visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
        $cek_user_ip = isset($cek_ip) ? ($cek_ip) : 0;

        // kalau belum ada, simpan data user tersebut ke database
        if ($cek_user_ip == 0) {
            $this->db->query("INSERT INTO tb_visitor(ip, date, hits, os, browser, versi, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $os . "','" . $browser . "','" . $browser_versi . "','" . $waktu . "','" . $timeinsert . "')");
        } else { //jika sudah ada, update
            $this->db->query("UPDATE tb_visitor SET hits=hits+1, os='" . $os . "', browser='" . $browser . "', versi='" . $browser_versi . "', online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        }

        // jumlah pengujung sekarang
        $this->db->group_by('ip');
        $pengunjung_hariini = $this->db->get_where('tb_visitor', ['date' => $date])->num_rows();
        $db_pengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM tb_visitor")->row();

        // total pengunjung
        $total_pengunjung = isset($db_pengunjung->hits) ? ($db_pengunjung->hits) : 0;
        $batas_waktu = time() - 300;

        // jumlah pengujung online
        $pengunjung_online = $this->db->query("SELECT * FROM tb_visitor WHERE online > '" . $batas_waktu . "'")->num_rows();

        $data['total_pengunjung'] = $total_pengunjung;
        $data['pengunjung_online'] = $pengunjung_online;
        $data['pengunjung_hariini'] = $pengunjung_hariini;
        $data['total_mahasiswa'] = $this->db->get('tb_mahasiswa')->num_rows();

        $this->load->view('template/header', $data, FALSE);
        $this->load->view('template/loading', $data, FALSE);
        $this->load->view('template/topbar', $data, FALSE);
        $this->load->view('template/crouser', $data, FALSE);
        $this->load->view('index', $data, FALSE);
        $this->load->view('template/footer', $data, FALSE);
    }

    public function tentang()
    {
        $data['title'] = "Tentang";
        $data['tentang'] = $this->db->get('tb_tentang')->row();

        $this->load->view('template/header', $data, FALSE);
        $this->load->view('template/loading', $data, FALSE);
        $this->load->view('template/topbar', $data, FALSE);
        $this->load->view('tentang', $data, FALSE);
        $this->load->view('template/footer', $data, FALSE);
    }

    public function sejarah()
    {
        $data['title'] = "Sejarah";
        $data['sejarah'] = $this->db->get('tb_sejarah')->row();

        $this->load->view('template/header', $data, FALSE);
        $this->load->view('template/loading', $data, FALSE);
        $this->load->view('template/topbar', $data, FALSE);
        $this->load->view('sejarah', $data, FALSE);
        $this->load->view('template/footer', $data, FALSE);
    }

    public function visimisi()
    {
        $data['title'] = "Visi dan Misi";
        $data['visimisi'] = $this->db->get('tb_visimisi')->row();

        $this->load->view('template/header', $data, FALSE);
        $this->load->view('template/loading', $data, FALSE);
        $this->load->view('template/topbar', $data, FALSE);
        $this->load->view('visimisi', $data, FALSE);
        $this->load->view('template/footer', $data, FALSE);
    }

    public function mahasiswa()
    {
        $data['title'] = "Mahasiswa";
        $data['mahasiswa'] = $this->db->get('tb_mahasiswa')->result();

        $this->load->view('template/header', $data, FALSE);
        $this->load->view('template/loading', $data, FALSE);
        $this->load->view('template/topbar', $data, FALSE);
        $this->load->view('mahasiswa', $data, FALSE);
        $this->load->view('template/footer', $data, FALSE);
    }

    public function dosen()
    {
        $data['title'] = "Dosen";
        $data['get_dosen'] = $this->db->get('tb_dosen')->result();

        $this->load->view('template/header', $data, FALSE);
        $this->load->view('template/loading', $data, FALSE);
        $this->load->view('template/topbar', $data, FALSE);
        $this->load->view('dosen', $data, FALSE);
        $this->load->view('template/footer', $data, FALSE);
    }

    public function kontak()
    {
        $data['title'] = "Kontak";

        $this->load->view('template/header', $data, FALSE);
        $this->load->view('template/loading', $data, FALSE);
        $this->load->view('template/topbar', $data, FALSE);
        $this->load->view('kontak', $data, FALSE);
        $this->load->view('template/footer', $data, FALSE);
    }
}

/* End of file Home.php */
