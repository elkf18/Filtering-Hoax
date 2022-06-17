<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{
	// membuat class construct
	public function __construct()
	{
		// untuk menjalankan program pertama kali dieksekusi
		parent::__construct();
		// load model dan library
		$this->load->model('databerita_model');
		$this->load->model('riwayat_model');
		$this->load->model('validasi_model');
		$this->load->model("user_model");
		$this->load->library('form_validation');
		if ($this->user_model->isNotLogin()) redirect(site_url('login'));
	}

	// mengambil data model dan di render
	public function index()
	{
		// untuk mengambil data dari model secara keseluruhan
		$data["Riwayat"] = $this->riwayat_model->getRiwayat();
		// meload data pada view yang sudah dibuat pada folder view
		$this->load->view("admin/riwayat/list", $data);
	}
}
