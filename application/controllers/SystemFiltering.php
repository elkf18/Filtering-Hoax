<?php
header("Access-Control-Allow-Origin: *");
defined('BASEPATH') or exit('No direct script access allowed');

class SystemFiltering extends CI_Controller
{
  // membuat class construct
  public function __construct()
  {
    // untuk menjalankan program pertama kali dieksekusi
    parent::__construct();
    // load model dan library
    $this->load->library('session');
    $this->load->model('systemfiltering_model');
    $this->load->library('form_validation');
    $this->load->model("user_model");
    if ($this->user_model->isNotLogin()) redirect(site_url('login'));
  }

  // mengambil data model dan di render
  public function index()
  {
    // untuk mengambil data dari model secara keseluruhan
    // $data["Filtering"] = $this->filtering_model->getAll();
    // meload data pada view yang sudah dibuat pada folder view
    // $this->load->view("admin/filtering/list", $data);
    $this->load->view("admin/filtering/list");
  }

  // public function aktivasi()
  // {
  //   $output = passthru("python coba.py");
  // }

  public function aktivasi()
  {
    // exec('python pyfix/main.py');
    // system('sudo python main.py > /dev/null 2>/dev/null &');
    // system('/full/path/to/python /full/path/to/main.py > /dev/null 2>/dev/null &');
    // system('sudo -u root -S python /var/www/4led/main.py');
    // $command = escapeshellcmd('/usr/python37/main.py'); 
    // $output = shell_exec($command);
    // $process = shell_exec("echo 'root_password' | sudo -u root -S python ".FCPATH."main.py");
    // $process = new Process ("python3 /Path/To/main.py");
    // $process->run();
    // if ($process->run()) {
    //   $this->session->set_flashdata('success', 'System Berhasil Dijalankan');
    //   redirect(site_url('systemfiltering'));
    //   // throw new ProcessFailedException($process);
    // }
    // else {
    //   // throw new ProcessFailedException($process);
    //   $this->session->set_flashdata('gagal', 'System Gagal Dijalankan');
    //   redirect(site_url('systemfiltering'));
    // }
  }
}
