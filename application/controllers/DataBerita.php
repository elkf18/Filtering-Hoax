<?php

defined('BASEPATH') or exit('No direct script access allowed');

class DataBerita extends CI_Controller
{
	// membuat class construct
	public function __construct()
	{
		// untuk menjalankan program pertama kali dieksekusi
		parent::__construct();
		// load model dan library
		$this->load->model('databerita_model');
		$this->load->library('form_validation');
		$this->load->model("user_model");
		if ($this->user_model->isNotLogin()) redirect(site_url('login'));
	}

	// mengambil data model dan di render
	public function index()
	{
		// untuk mengambil data dari model secara keseluruhan
		$data["DataBerita"] = $this->databerita_model->getDataBerita();
		// meload data pada view yang sudah dibuat pada folder view
		$this->load->view("admin/databerita/list", $data);
	}

	public function detail($id = NULL)
	{
		// untuk mengambil data dari model secara keseluruhan
		$data["DataBerita"] = $this->databerita_model->getDetail($id);
		// meload data pada view yang sudah dibuat pada folder view
		$this->load->view("admin/databerita/detail", $data);
	}

	// untuk fungsi edit dengan nilai defaultnya null
	public function edit($id = NULL)
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required');

		$data['DataBerita']  = $this->databerita_model->getById($id);

		if ($this->form_validation->run()) {
			$this->databerita_model->update();
		}
		$this->load->view("admin/databerita/edit_form", $data);
	}

	// untuk fungsi delete dengan nilai defaultnya null
	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->databerita_model->delete($id)) {
			redirect(site_url('admin/databerita'));
		}
	}
}
