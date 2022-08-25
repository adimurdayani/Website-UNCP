<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kontak');
    }


    public function index()
    {
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('auth', 'refresh');
        } else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
        {
            redirect('auth/block');
        } else {
            $data['title'] = 'Kontak';
            $data['session'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row();
            $data['get_config'] = $this->db->get('tb_konfigurasi')->row();
            $this->db->order_by('tb_kontak.id', 'desc');
            $data['get_kontak'] = $this->db->get('tb_kontak')->result();

            $this->load->view('template/header', $data, FALSE);
            $this->load->view('template/topbar', $data, FALSE);
            $this->load->view('template/sidebar', $data, FALSE);
            $this->load->view('index', $data, FALSE);
            $this->load->view('template/footer', $data, FALSE);
        }
    }

    public function send()
    {
        $data['title'] = "Home";

        $ip = $this->input->ip_address();
        $date = date("Y-m-d");
        $waktu = time();
        $timeinsert = date("Y-m-d H:i:s");

        // cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
        $cek_ip = $this->db->query("SELECT * FROM tb_visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
        $cek_user_ip = isset($cek_ip) ? ($cek_ip) : 0;

        // kalau belum ada, simpan data user tersebut ke database
        if ($cek_user_ip == 0) {
            $this->db->query("INSERT INTO tb_visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
        } else { //jika sudah ada, update
            $this->db->query("UPDATE tb_visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        }

        $data['tentang'] = $this->db->get('tb_tentang')->row();
        $data['layanan'] = $this->db->get('tb_layanan')->row();
        $data['team'] = $this->db->get('tb_team')->result();

        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('pesan', 'pesan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data, FALSE);
            $this->load->view('template/loading', $data, FALSE);
            $this->load->view('template/topbar', $data, FALSE);
            $this->load->view('index', $data, FALSE);
            $this->load->view('template/footer', $data, FALSE);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'pesan' => $this->input->post('pesan'),
                'created_at' => date("d M Y - H:i:s"),
                'updated_at' => date("d M Y - H:i:s")
            ];
            $this->db->insert('tb_kontak', $data);
            $this->session->set_flashdata('success', '<fieldset><div id="success_page"><h3>Email Sent Successfully.</h3><p>Thank you <strong>$name</strong>, your message has been submitted to us.</p></div></fieldset>');
            redirect('home');
        }
    }

    public function hapus_all()
    {
        $id = $_POST['id'];
        $this->m_kontak->delete($id);
        $this->session->set_flashdata(
            'success',
            '$(document).ready(function(e) {
                Swal.fire({
                    type: "success",
                    title: "Sukses",
                    text: "Semua data kontak berhasil dihapus!"
                })
            })'
        );
        redirect('kontak');
    }

    public function hapus($id)
    {
        $decode = base64_decode($id);
        $this->db->delete('tb_kontak', ['id' => $decode]);
        $this->session->set_flashdata(
            'success',
            '$(document).ready(function(e) {
                Swal.fire({
                    type: "success",
                    title: "Sukses",
                    text: "Kontak berhasil dihapus!"
                })
            })'
        );
        redirect('kontak', 'refresh');
    }
}

/* End of file Konfigurasi.php */
