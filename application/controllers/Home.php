<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		// load model Siswa_model dengan otomatis yang hanya untuk di controller Home ini saja 
		parent::__construct();
		$this->load->model('Siswa_model');
	}

	public function index()
	{
		// CRUD => Read (untuk menampilkan data)
		$data['tampilkan_data'] = $this->Siswa_model->read();
		$this->load->view('index', $data);
	}

	public function simpan_data()
	{
		// CRUD => Create (untuk menyimpan data)
		$this->Siswa_model->create();
		//flashdata massage
		$this->session->set_flashdata(
			'message',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data Siswa Berhasil Ditambahkan !</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>'
		);
		redirect(base_url());
	}

	public function tambah_siswa()
	{
		// load view form tambah siswa nya saja
		$this->load->view('form_tambah_siswa');
	}

	public function panggil_siswa($id)
	{
		// mengambil hanya 1 baris id (melalui parameter) untuk
		// ditampilkan menggunakan CRUD => get_where dan
		// load view form edit siswa nya 
		$data['tampilkan_data'] = $this->Siswa_model->read_by_id($id);
		$this->load->view('form_edit_siswa', $data);
	}

	public function update_data($id)
	{
		// CRUD => Update (untuk mengupdate data) melalui parameter
		$this->Siswa_model->update($id);
		//flash data massage
		$this->session->set_flashdata(
			'message',
			'<div class="alert alert-info alert-dismissible fade show" role="alert">
			<strong>Data Siswa Berhasil Diupdate !</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>'
		);
		redirect(base_url());
	}

	public function hapus_siswa($id)
	{
		// CRUD => Delete (untuk menghapus data) melalui parameter
		$this->Siswa_model->delete($id);
		$this->session->set_flashdata(
			'message',
			'<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data Siswa Berhasil Dihapus !</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>'
		);
		redirect(base_url());
	}
}
