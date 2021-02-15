<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function index()
    {
        $this->load->model('Admin_model');
        $data['status'] = $this->Admin_model->countJumlahKK();
        $this->load->view('tamplate/header');
        $this->load->view('public/index', $data);
        $this->load->view('tamplate/footer');
    }
}
