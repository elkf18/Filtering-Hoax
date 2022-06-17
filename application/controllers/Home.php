<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Home extends CI_Controller
{
	// membuat class construct
	public function __construct()
	{
		// untuk menjalankan program pertama kali dieksekusi
		parent::__construct();
		// load model dan library
		$this->load->model("home_model");
		$this->load->library("form_validation");
	}

	// mengambil data model dan di render
	public function index()
	{
		// untuk mengambil data dari model secara keseluruhan
		$data["Home"] = $this->home_model->getDataBerita();
		// meload data pada view yang sudah dibuat pada folder view
		$this->load->view("guest/home", $data);
	}

	public function detail($id = null)
	{
		// untuk mengambil data dari model secara keseluruhan
		$data["Home"] = $this->home_model->getDetail($id);
		$data["Homee"] = $this->home_model->getListBerita();
		// meload data pada view yang sudah dibuat pada folder view
		$this->load->view("guest/detail", $data);
	}
}
