<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bendahara extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_bendahara');
        $this->login_kah();    //Memastikan hanya yang sudah login dapat akses fungsi ini
    }


    public function login_kah()
    {
        if ($this->session->has_userdata('username') && $this->session->userdata('id_level') == 2)
            return TRUE;
        else
            redirect(base_url('logout'));
    }


    public function index()
    {
        $data['judul']    = 'Selamat Datang di TPA Aisyiah Attaqwa';
        $data['page']    = 'home';
        $data['jml_santri']    = $this->m_umum->jumlah_record_tabel('santri');
        $data['jml_guru']    = $this->m_umum->jumlah_record_tabel('guru');
        $this->tampil($data);
    }

    //============================== SANTRI ==============================
    public function santri()
    {
        $data['judul'] = 'Data Santri TPA Aisyiah';
        $data['page'] = 'santri';
        $data['santri'] = $this->m_bendahara->dt_santri();
        $this->tampil($data);
    }
    public function santri_detil($id)
    {
        $data['judul'] = 'Detil Data Santri TPA Aisyiah';
        $data['page'] = 'santri_detil';
        $data['d'] = $this->m_bendahara->dt_santri_detil($id);
        $this->tampil($data);
    }


    //============================== GURU ==============================
    public function guru()
    {
        $data['judul'] = 'Data Guru TPA Aisyiah';
        $data['page'] = 'guru';
        $data['guru'] = $this->m_bendahara->dt_guru();
        $this->tampil($data);
    }


    //============================== kelas ==============================
    public function kelas()
    {
        $data['judul'] = 'Data kelas TPA Aisyiah';
        $data['page'] = 'kelas';
        $data['kelas'] = $this->m_bendahara->dt_kelas();
        $this->tampil($data);
    }


    //============================== LIST Santri per kelas ==============================
    public function list_santri_per_kelas($id = NULL)
    {
        $data['judul'] = 'Data Santri Tiap kelas di TPA Aisyiah';
        $data['page'] = 'list_santri_per_kelas';
        $data['ddkelas'] = $this->m_bendahara->dropdown_kelas();
        $data['santri'] = $this->m_bendahara->dt_santri_per_kelas($id);
        $data['kelas'] = $this->m_bendahara->dt_kelas();
        $this->tampil($data);
    }

    //============================== SUMBANGAN ==============================
    public function sumbangan()
    {
        $data['judul'] = 'Data Sumbangan TPA Aisyiah';
        $data['page'] = 'sumbangan';
        $data['sumbangan'] = $this->m_bendahara->dt_sumbangan();
        $this->tampil($data);
    }

    public function sumbangan_detil($id)
    {
        $data['judul'] = 'Detil Data Sumbangan Santri TPA Aisyiah';
        $data['page'] = 'sumbangan_detil';
        $data['sumbangan'] = $this->m_bendahara->dt_sumbangan_detil($id);
        $this->tampil($data);
    }

    public function sumbangan_tambah()
    {
        $data['judul'] = 'Tambah Data Sumbangan';
        $data['page'] = 'sumbangan_tambah';

        $this->form_validation->set_rules('tanggal', 'Isikan tanggal', 'required');
        $this->form_validation->set_rules('id_santri', 'Pilih id santri', 'callback_dd_cek');
        $this->form_validation->set_rules('jumlah', 'Isikan jumlah', 'required');

        $data['ddsantri'] = $this->m_bendahara->dropdown_santri();

        if ($this->form_validation->run() === FALSE) {
            $this->tampil($data);
        } else {
            $this->m_bendahara->dt_sumbangan_tambah();
            redirect(base_url('bendahara/sumbangan'));
        }
    }

    public function sumbangan_edit($id = FALSE)
    {
        $data['judul'] = 'Edit Data Sumbangan';
        $data['page'] = 'sumbangan_edit';
        $this->form_validation->set_rules('tanggal', 'Isikan tanggal', 'required');
        $this->form_validation->set_rules('id_santri', 'Pilih id santri', 'callback_dd_cek');
        $this->form_validation->set_rules('jumlah', 'Isikan jumlah', 'required');

        $data['ddsantri'] = $this->m_bendahara->dropdown_santri();
        $data['d'] = $this->m_umum->cari_data('sumbangan', 'id_sumbangan', $id);

        if ($this->form_validation->run() === FALSE) {
            $this->tampil($data);
        } else {
            $this->m_bendahara->dt_sumbangan_edit($id);
            redirect(base_url('bendahara/sumbangan'));
        }
    }

    public function sumbangan_hapus($id)
    {
        $this->m_umum->hapus_data('sumbangan', 'id_sumbangan', $id);
        redirect(base_url('bendahara/sumbangan'));
    }



    //============ Tools ===============
    function dd_cek($str)    //Untuk Validasi DropDown jika tidak dipilih
    {
        if ($str == '-Pilih-') {
            $this->form_validation->set_message('dd_cek', 'Harus dipilih');
            return FALSE;
        } else
            return TRUE;
    }

    function tampil($data)
    {
        $this->load->view('bendahara/header', $data);
        $this->load->view('bendahara/isi');
        $this->load->view('bendahara/footer');
    }
}