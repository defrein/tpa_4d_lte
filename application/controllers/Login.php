<!-- Contoh Sistem Informasi Sederhana -->
<!-- By Agus SBN - Matakuliah Pemrograman WEB -->
<!-- Politeknik Negeri Banjarmasin -->
<!-- Fitur: -->
<!-- - CodeIgniter -->
<!-- - CRUD Multitable -->
<!-- - Admin LTE -->
<!-- - datatable (paging, sort and cari) -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	function index()
	{
		$data['pesan'] = "";
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'Password tidak boleh kosong'));
		if ($this->form_validation->run() == FALSE)
			$this->load->view("login", $data);
		else {
			if ($data['dt'] = $this->m_umum->cek_login()) {
				$data_user = array(
					'username'  => $data['dt']['username'],
					'id_level'     => $data['dt']['id_level']
				);
				$this->session->set_userdata($data_user);
				if ($data_user['id_level'] == 1)
					redirect(base_url("admin"));
				else if ($data_user['id_level'] == 2)
					redirect(base_url("bendahara"));
				else
					show_404();
			} else {
				$data['pesan'] = 'username password salah';
				$this->load->view("login", $data);
			}
		}
		$useraktif = $this->session->userdata('username');
	}

	function logout()
	{
		unset(
			$_SESSION['username'],
			$_SESSION['id_level']
		);
		$data['pesan'] = 'Logout Sukses';
		$this->load->view("login", $data);
	}
}