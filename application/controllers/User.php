<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	// membuat class construct
	public function __construct()
	{
		// untuk menjalankan program pertama kali dieksekusi
		parent::__construct();
		// load model dan library
		$this->load->model('user_model');
		$this->load->model('databerita_model');
		$this->load->library('form_validation');
		if ($this->user_model->isNotLogin()) redirect(site_url('login'));
	}

	// mengambil data model dan di render
	public function index()
	{
		// untuk mengambil data dari model secara keseluruhan
		$data["User"] = $this->user_model->getAll();
		// meload data pada view yang sudah dibuat pada folder view
		$this->load->view("admin/user/list", $data);
	}
	
	// menambahkan data
	public function input( )
	{
		$this->form_validation->set_message('required', '{field}Kolom Wajib Diisi !');

		$user = $this->user_model;
		// menayatakan form validasi untuk mempermudah
		$validation = $this->form_validation;
		$validation->set_rules($user->rules());

		// percabangan nilai untuk melakukan validasi
		if ($validation->run()) {
			$user->save();
		}
		$this->load->view('admin/user/new_form');
	}

	// untuk fungsi edit dengan nilai defaultnya null
	public function edit($id = NULL)
	{
		$data['User']  = $this->user_model->getById($id);
		
		$user = $this->user_model;
		// menayatakan form validasi untuk mempermudah
		$validation = $this->form_validation;
		$validation->set_rules($user->rules());

		// percabangan nilai untuk melakukan validasi
		if ($validation->run() === FALSE) {
			$this->load->view("admin/user/edit_form", $data);
		} else {
			$user->update();
		}
	}

	// untuk fungsi delete dengan nilai defaultnya null
	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->user_model->delete($id)) {
			redirect(site_url('admin/user'));
		}
	}

	// public function delete($id = null)
	// {
	// 	// jika id yang dimana idKategori adalah sama dengan $id
	// 	$getId = encode_php_tags($id);
	// 	$where = ['id_admin' => $getId];

	// 	// cek kategori jika dimana sama dengan barang
	// 	$cekadmin = count((array) $this->main->get_where('tb_berita', $where));

	// 	// jika cekadmin lebih dari 0
	// 	if ($cekadmin > 0) {
	// 		msgBox('delete', false);
	// 		setMsg('danger', '<strong>Gagal!!!</strong> Data Admin telah digunakan pada Data Berita, silahkan hapus Data Berita terlebih dahulu.');
	// 	} else {
	// 		$del = $this->main->delete('user', $where);
	// 		if ($del) {
	// 			msgBox('delete');
	// 			redirect('user');
	// 		} else {
	// 			msgBox('delete', false);
	// 			redirect('user');
	// 		}
	// 	}

	// 	redirect('user');
	// }
}
