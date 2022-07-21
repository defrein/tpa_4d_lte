<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->login_kah();	//Memastikan hanya yang sudah login dapat akses fungsi ini
	}


	public function login_kah()
	{
		if ($this->session->has_userdata('username') && $this->session->userdata('id_level') == 1)
			return TRUE;
		else
			redirect(base_url('logout'));
	}


	public function index()
	{
		$data['judul']	= 'Selamat Datang di TPA Aisyiah Attaqwa';
		$data['page']	= 'home';
		$data['jml_santri']	= $this->m_umum->jumlah_record_tabel('santri');
		$data['jml_guru']	= $this->m_umum->jumlah_record_tabel('guru');
		$this->tampil($data);
	}

	//============================== SANTRI ==============================
	public function santri()
	{
		$data['judul'] = 'Data Santri TPA Aisyiah';
		$data['page'] = 'santri';
		$data['santri'] = $this->m_admin->dt_santri();
		$this->tampil($data);
	}
	public function santri_detil($id)
	{
		$data['judul'] = 'Detil Data Santri TPA Aisyiah';
		$data['page'] = 'santri_detil';
		$data['d'] = $this->m_admin->dt_santri_detil($id);
		$this->tampil($data);
	}

	public function santri_tambah()
	{
		$data['judul'] = 'Tambah Data Santri';
		$data['page'] = 'santri_tambah';

		$this->form_validation->set_rules(
			'nama_santri',
			'Nama Santri',
			'required|min_length[3]|max_length[30]',
			array('required' => '%s harus diisi.')
		);
		$this->form_validation->set_rules('nama_alias', 'Isikan Nama Alias', 'required');
		$this->form_validation->set_rules('id_guru', 'Pilih id guru', 'callback_dd_cek');

		$data['ddguru'] = $this->m_admin->dropdown_guru();
		$data['ddkelas'] = $this->m_admin->dropdown_kelas();

		if ($this->form_validation->run() === FALSE) {
			$this->tampil($data);
		} else {
			$this->m_admin->dt_santri_tambah();
			redirect(base_url('admin/santri'));
		}
	}
	public function santri_edit($id = FALSE)
	{
		$data['judul'] = 'Edit Data Santri';
		$data['page'] = 'santri_edit';
		$this->form_validation->set_rules(
			'nama_santri',
			'Nama Santri',
			'required|min_length[3]|max_length[30]',
			array('required' => '%s harus diisi.')
		);
		$this->form_validation->set_rules('nama_alias', 'Isikan Nama Alias', 'required');
		$this->form_validation->set_rules('id_guru', 'Pilih id guru', 'callback_dd_cek');

		$data['ddguru'] = $this->m_admin->dropdown_guru();
		$data['ddkelas'] = $this->m_admin->dropdown_kelas();
		$data['d'] = $this->m_umum->cari_data('santri', 'id_santri', $id);

		if ($this->form_validation->run() === FALSE) {
			$this->tampil($data);
		} else {
			$this->m_admin->dt_santri_edit($id);
			redirect(base_url('admin/santri'));
		}
	}

	public function santri_hapus($id)
	{
		$this->m_umum->hapus_data('santri', 'id_santri', $id);
		redirect(base_url('admin/santri'));
	}


	//============================== GURU ==============================
	public function guru()
	{
		$data['judul'] = 'Data Guru TPA Aisyiah';
		$data['page'] = 'guru';
		$data['guru'] = $this->m_admin->dt_guru();
		$this->tampil($data);
	}

	public function guru_tambah()
	{
		$data['judul'] = 'Tambah Data Guru TPA Aisyiah';
		$data['page'] = 'guru_tambah';

		$this->form_validation->set_rules('nama_guru', 'Isikan Nama guru', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->tampil($data);
		} else {
			$this->m_admin->guru_tambah();
			redirect(base_url('admin/guru'));
		}
	}

	public function guru_edit($id = FALSE)
	{
		$data['judul'] = 'EDIT data Guru TPA Aisyiah Attaqwa';
		$data['page'] = 'guru_edit';

		$this->form_validation->set_rules(
			'nama_guru',
			'Nama Guru',
			'required|min_length[3]|max_length[30]',
			array('required' => '%s harus diisi.')
		);
		$data['d'] = $this->m_umum->cari_data('guru', 'id_guru', $id);

		if ($this->form_validation->run() === FALSE) {
			$this->tampil($data);
		} else {
			$this->m_admin->dt_guru_edit($id);
			redirect(base_url('admin/guru'));
		}
	}

	public function guru_hapus($id)
	{
		$this->m_umum->hapus_data('guru', 'id_guru', $id);
		redirect(base_url('admin/guru'));
	}

	//============================== kelas ==============================
	public function kelas()
	{
		$data['judul'] = 'Data kelas TPA Aisyiah';
		$data['page'] = 'kelas';
		$data['kelas'] = $this->m_admin->dt_kelas();
		$this->tampil($data);
	}

	public function kelas_tambah()
	{
		$data['judul'] = 'Tambah Data kelas TPA Aisyiah';
		$data['page'] = 'kelas_tambah';

		$this->form_validation->set_rules('nama_kelas', 'Isikan Nama kelas', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->tampil($data);
		} else {
			$this->m_admin->kelas_tambah();
			redirect(base_url('admin/kelas'));
		}
	}

	public function kelas_edit($id = FALSE)
	{
		$data['judul'] = 'EDIT data kelas TPA Aisyiah Attaqwa';
		$data['page'] = 'kelas_edit';

		$this->form_validation->set_rules(
			'nama_kelas',
			'Nama kelas',
			'required|min_length[3]|max_length[30]',
			array('required' => '%s harus diisi.')
		);
		$data['d'] = $this->m_umum->cari_data('kelas', 'id_kelas', $id);

		if ($this->form_validation->run() === FALSE) {
			$this->tampil($data);
		} else {
			$this->m_admin->dt_kelas_edit($id);
			redirect(base_url('admin/kelas'));
		}
	}

	public function kelas_hapus($id)
	{
		$this->m_umum->hapus_data('kelas', 'id_kelas', $id);
		redirect(base_url('admin/kelas'));
	}

	//============================== LIST Santri per kelas ==============================
	public function list_santri_per_kelas($id = NULL)
	{
		$data['judul'] = 'Data Santri Tiap kelas di TPA Aisyiah';
		$data['page'] = 'list_santri_per_kelas';
		$data['ddkelas'] = $this->m_admin->dropdown_kelas();
		$data['santri'] = $this->m_admin->dt_santri_per_kelas($id);
		$data['kelas'] = $this->m_admin->dt_kelas();
		$this->tampil($data);
	}

	//============================== LIST Santri per kelas ==============================
	public function sumbangan()
	{
		$data['judul'] = 'Data Sumbangan TPA Aisyiah';
		$data['page'] = 'sumbangan';
		$data['sumbangan'] = $this->m_admin->dt_sumbangan();
		$this->tampil($data);
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
		$this->load->view('admin/header', $data);
		$this->load->view('admin/isi');
		$this->load->view('admin/footer');
	}
}