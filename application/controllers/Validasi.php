<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Validasi extends CI_Controller
{
  // membuat class construct
  public function __construct()
  {
    // untuk menjalankan program pertama kali dieksekusi
    parent::__construct();
    // load model dan library
    $this->load->library('session');
    $this->load->model('validasi_model');
    $this->load->library('form_validation');
    $this->load->model("user_model");
    if ($this->user_model->isNotLogin()) redirect(site_url('login'));
  }

  // mengambil data model dan di render
  public function index()
  {
    // untuk mengambil data dari model secara keseluruhan
    $data["Validasi"] = $this->validasi_model->getAll();
    // meload data pada view yang sudah dibuat pada folder view
    $this->load->view("admin/validasi/list", $data);
  }

  public function detail($id = NULL)
	{
		// untuk mengambil data dari model secara keseluruhan
		$data["Validasi"] = $this->validasi_model->getDetail($id);
		// meload data pada view yang sudah dibuat pada folder view
		$this->load->view("admin/validasi/detail", $data);
	}

  public function get_session_data(){
    $this->session->all_userdata();
  }

  // untuk fungsi validasi
  public function validasi($id = null)
  {
    $id_admin = $this->session->userdata('id_admin');
    if ($this->validasi_model->validasi($id, $id_admin)) {
      $this->session->set_flashdata('success', 'Data Berita Berhasil Divalidasi');
      redirect(site_url('validasi'));
    }
  }
}
