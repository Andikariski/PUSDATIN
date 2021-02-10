<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->library('form_validation');
    }


    public function index()
    {
        // if ($this->session->userdata('username')) {
        //     redirect('Login');
        // }

        $this->form_validation->set_rules(
            'username',
            'Username',
            'required',
            [
                'required' => 'Username harus di isi..!!',
            ]
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            [
                'required' => 'Password harus di isi..!!',
            ]
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('tamplateLogin/header');
            $this->load->view('admin/login');
            $this->load->view('tamplateLogin/footer');
        } else {
            $this->aksiLogin();
        }
    }

    public function aksiLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = $this->Login_model->cekDataAdmin($username);

        if ($data['username'] == $username && $data['password'] == $password) {
            $data = [
                'username' => $username['username']
            ];
            $this->session->set_userdata($data);
            redirect('Admin');
        } else {
            $this->session->set_flashdata('flash-gagal-login', 'Salah');
            redirect('Login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect('Login');
    }
}
