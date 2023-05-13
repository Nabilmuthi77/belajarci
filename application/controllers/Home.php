<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		// load model otomatis yang hanya untuk di controller Home ini 
		parent::__construct();
		$this->load->model('Siswa_model');
	}

	public function index()
	{
		// CRUD => Read (untuk menampilkan data)
		$query['tampilkan_data'] = $this->Siswa_model->read();
		$this->load->view('index', $query);
	}

	public function simpan_data()
	{
		// CRUD => Create (untuk menyimpan data)
		$this->Siswa_model->create();
		redirect(base_url());
	}

	public function tambah_siswa()
	{
		// load view form tambah siswa nya saja
		$this->load->view('form_tambah_siswa');
	}

	public function panggil_siswa($id)
	{
		// mengambil hanya 1 baris id (melalui parameter) untuk ditampilkan menggunakan CRUD => get_where dan
		// load view form edit siswa nya 
		$row_query['tampilkan_data'] = $this->Siswa_model->read_by_id($id);
		$this->load->view('form_edit_siswa', $row_query);
	}

	public function update_data($sudo_row)
	{
		// CRUD => Update (untuk mengupdate data) melalui parameter
		$this->Siswa_model->update($sudo_row);
		redirect(base_url());
	}

	public function hapus_siswa($id)
	{
		// CRUD => Delete (untuk menghapus data) melalui parameter
		$this->Siswa_model->delete($id);
		redirect(base_url());
	}
}
