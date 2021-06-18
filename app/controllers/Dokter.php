<?php

class Dokter extends Controller
{

	public function __construct()
	{
		if ($_SESSION['session_login'] != 'sudah_login') {
			Flasher::setMessage('Login', 'Tidak ditemukan.', 'danger');
			header('location: ' . base_url . '/login');
			exit;
		}
	}

	public function index()
	{
		$data['title'] = 'Data Dokter';
		$data['dokter'] = $this->model('DokterModel')->getAllDokter();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('dokter/index', $data);
		$this->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Dokter';
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('dokter/create', $data);
		$this->view('templates/footer');
	}

	public function simpanDokter()
	{

		if ($this->model('DokterModel')->tambahDokter($_POST) > 0) {
			Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
			header('location: ' . base_url . '/dokter');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
			header('location: ' . base_url . '/dokter');
			exit;
		}
	}
	public function edit($id)
	{

		$data['title'] = 'Detail Dokter';
		$data['dokter'] = $this->model('DokterModel')->getDokterByid($id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('dokter/edit', $data);
		$this->view('templates/footer');
	}
	public function updateDokter()
	{
		if ($this->model('DokterModel')->updateDataDokter($_POST) > 0) {
			Flasher::setMessage('Berhasil', 'diupdate', 'success');
			header('location: ' . base_url . '/dokter');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'diupdate', 'danger');
			header('location: ' . base_url . '/dokter');
			exit;
		}
	}

	public function hapus($id)
	{
		if ($this->model('DokterModel')->deleteDokter($id) > 0) {
			Flasher::setMessage('Berhasil', 'dihapus', 'success');
			header('location: ' . base_url . '/dokter');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'dihapus', 'danger');
			header('location: ' . base_url . '/dokter');
			exit;
		}
	}
}
