<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    // mengambil data model dan di render
    public function index()
    {
        $this->load->view("guest/kontak");
    }
}