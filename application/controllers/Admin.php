<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->model('Admin_model');
        $this->load->library('form_validation');

        if (!$this->session->userdata('username')) {
            redirect('Login');
        }
    }

    public function index()
    {
        $data['rt'] = $this->Admin_model->countJumlahRt();
        $data['nama'] = $this->Admin_model->countJumlahWarga();
        $data['nik'] = $this->Admin_model->countJumlahWargaL();
        $data['bpjs'] = $this->Admin_model->countJumlahWargaP();
        $data['menu'] = $this->Admin_model->getDataMenu();
        $this->load->view('tamplateAdmin/header');
        $this->load->view('tamplateAdmin/sidebar', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('tamplateAdmin/footer');
    }

    public function dataPUSKB($rt)
    {

        $data['tbl_pusdankb']   = $this->Admin_model->getDatabyRt($rt);
        $data['index']          = $this->Admin_model->getDatabyone($rt);
        $data['menu']           = $this->Admin_model->getDataMenu();

        $this->load->view('tamplateAdmin/header');
        $this->load->view('tamplateAdmin/sidebar', $data);
        $this->load->view('admin/dataPUSKB', $data);
        $this->load->view('tamplateAdmin/footer');
    }

    public function addDataPUSKB()
    {
        $rt = $this->input->post('rt');
        $this->Admin_model->addDataPUSKBM();
        $this->session->set_flashdata('flash-all', ' Di Tambahkan');
        redirect('admin/dataPUSKB/' . $rt);
    }

    public function deleteDataPUSKB($id, $rt)
    {
        $this->Admin_model->deleteDataPUSKBM($id);
        $this->session->set_flashdata('flash-all', ' Di Hapus');
        redirect('admin/dataPUSKB/' . $rt);
    }

    public function editDataPUSKB()
    {
        $id =  $this->input->post('id');
        $rt = $this->input->post('rt');

        $this->Admin_model->editDataPUSKBM($id);
        $this->session->set_flashdata('flash-all', ' Di Perbarui');
        redirect('admin/dataPUSKB/' . $rt);
    }


    public function dataKelKg($rt)
    {
        $data['tbl_kelompok_kegiatan']      = $this->Admin_model->getDataKelKegbyRt($rt);
        $data['index']                  = $this->Admin_model->getDatabyone($rt);
        $data['menu']                   = $this->Admin_model->getDataMenu();
        $data['bkb'] = $this->Admin_model->countBKB($rt);
        $data['bkr'] = $this->Admin_model->countBKR($rt);
        $data['bkl'] = $this->Admin_model->countBKL($rt);
        $data['uppks'] = $this->Admin_model->countUPPKS($rt);
        $data['pik_r'] = $this->Admin_model->countPIKR($rt);

        $this->load->view('tamplateAdmin/header');
        $this->load->view('tamplateAdmin/sidebar', $data);
        $this->load->view('admin/dataKelKeg', $data);
        $this->load->view('tamplateAdmin/footer');
    }

    public function addDataKelKeg()
    {
        $rt = $this->input->post('rt');
        $this->Admin_model->addDataKelKegM($rt);
        $this->session->set_flashdata('flash-all', ' Di Tambahkan');
        redirect('admin/dataKelKg/' . $rt);
    }

    public function deleteDataKelKeg($id, $rt)
    {
        $this->Admin_model->deleteDataKelKegM($id);
        $this->session->set_flashdata('flash-all', ' Di Hapus');
        redirect('admin/dataKelKg/' . $rt);
    }

    public function editDataKelKeg()
    {
        $id =  $this->input->post('id');
        $rt = $this->input->post('rt');

        $this->Admin_model->editDataKelKegM($id);
        $this->session->set_flashdata('flash-all', ' Di Perbarui');
        redirect('admin/dataKelKg/' . $rt);
    }


    public function dataRentangUsia($rt)
    {
        $data['tbl_rentang_usia']      = $this->Admin_model->getDataRentangUsiabyRt($rt);
        $data['index']                  = $this->Admin_model->getDatabyone($rt);
        $data['menu']                   = $this->Admin_model->getDataMenu();

        $this->load->view('tamplateAdmin/header');
        $this->load->view('tamplateAdmin/sidebar', $data);
        $this->load->view('admin/dataRentangUsia', $data);
        $this->load->view('tamplateAdmin/footer');
    }

    public function addDataRentangUsia()
    {
        $rt = $this->input->post('rt');
        $this->Admin_model->addDataRentangUsiaM($rt);
        $this->session->set_flashdata('flash-all', ' Di Tambahkan');
        redirect('admin/dataRentangUsia/' . $rt);
    }

    public function deleteDataRentangUsia($id, $rt)
    {
        $this->Admin_model->deleteDataRentangUsiaM($id);
        $this->session->set_flashdata('flash-all', ' Di Hapus');
        redirect('admin/dataRentangUsia/' . $rt);
    }

    public function editDataRentangUsia()
    {
        $id =  $this->input->post('id');
        $rt = $this->input->post('rt');

        $this->Admin_model->editDataRentangUsiaM($id);
        $this->session->set_flashdata('flash-all', ' Di Perbarui');
        redirect('admin/dataRentangUsia/' . $rt);
    }

    public function dataWarga($rt)
    {
        $data['tbl_data_warga']      = $this->Admin_model->getDataWargabyRt($rt);
        $data['index']                  = $this->Admin_model->getDatabyone($rt);
        $data['menu']                   = $this->Admin_model->getDataMenu();

        $this->load->view('tamplateAdmin/header');
        $this->load->view('tamplateAdmin/sidebar', $data);
        $this->load->view('admin/dataWarga', $data);
        $this->load->view('tamplateAdmin/footer');
    }

    public function addDataWarga()
    {
        $rt = $this->input->post('rt');
        $this->Admin_model->addDataWargaM($rt);
        $this->session->set_flashdata('flash-all', ' Di Tambahkan');
        redirect('admin/dataWarga/' . $rt);
    }

    public function deleteDataWarga($id, $rt)
    {
        $this->Admin_model->deleteDataWargaM($id);
        $this->session->set_flashdata('flash-all', ' Di Hapus');
        redirect('admin/dataWarga/' . $rt);
    }

    public function editDataWarga()
    {
        $id =  $this->input->post('id');
        $rt = $this->input->post('rt');

        $this->Admin_model->editDataWargaM($id);
        $this->session->set_flashdata('flash-all', ' Di Perbarui');
        redirect('admin/dataWarga/' . $rt);
    }
}
