<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    // Menampilkan semua data menu
    public function getDataMenu()
    {
        return $this->db->get('menu')->result_array();
    }

    public function getDatabyRt($rt)
    {
        $sql = "SELECT * from tbl_pusdankb where rt = '$rt' ";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function getDatabyone($rt)
    {
        $sql = "SELECT * from menu where rt='$rt' limit 1";
        $result = $this->db->query($sql);
        return $result->row_array();
    }

    // count jumlah RT
    public function countJumlahRt()
    {

        $sql = "SELECT Count(rt) as jumlahrt from ketua_rt ";
        $result = $this->db->query($sql);
        return $result->row_array();
    }

    public function countJumlahWarga()
    {

        $sql = "SELECT Count(nama) as jumlahwarga from tbl_data_warga";
        $result = $this->db->query($sql);
        return $result->row_array();
    }

    public function countJumlahWargaL()
    {

        $sql = "SELECT Count(nik) as jumlahwargaL from tbl_data_warga where jenis_kelamin ='Laki-Laki'";
        $result = $this->db->query($sql);
        return $result->row_array();
    }

    public function countJumlahWargaP()
    {

        $sql = "SELECT Count(bpjs) as jumlahwargaP from tbl_data_warga where jenis_kelamin ='Perempuan'";
        $result = $this->db->query($sql);
        return $result->row_array();
    }

    public function countJumlahKK()
    {

        $sql = "SELECT Count(status) as jumlahKK from tbl_data_warga where status ='kepala Keluarga'";
        $result = $this->db->query($sql);
        return $result->row_array();
    }

    public function addDataPUSKBM()
    {
        $data = [
            "nama_suami"            => $this->input->post('nama_suami'),
            "nama_istri"            => $this->input->post('nama_istri'),
            "ttl_suami"             => $this->input->post('ttl_suami'),
            "ttl_istri"             => $this->input->post('ttl_istri'),
            "jumlah_anak"           => $this->input->post('jumlah_anak'),
            "umur_anak_terkecil"    => $this->input->post('umur_anak_terkecil'),
            "kesertaan_kb"          => $this->input->post('kesertaan_kb'),
            "rt"                    => $this->input->post('rt')
        ];

        $this->db->insert('tbl_pusdankb', $data);
    }


    public function editDataPUSKBM($id)
    {
        $data = [
            "nama_suami"            => $this->input->post('nama_suami'),
            "nama_istri"            => $this->input->post('nama_istri'),
            "ttl_suami"             => $this->input->post('ttl_suami'),
            "ttl_istri"             => $this->input->post('ttl_istri'),
            "jumlah_anak"           => $this->input->post('jumlah_anak'),
            "umur_anak_terkecil"    => $this->input->post('umur_anak_terkecil'),
            "kesertaan_kb"          => $this->input->post('kesertaan_kb'),
            "rt"                    => $this->input->post('rt')
        ];

        $this->db->where('id', $id);
        $this->db->update('tbl_pusdankb', $data);
    }

    public function deleteDataPUSKBM($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_pusdankb');
    }


    public function getDataKelKegbyRt($rt)
    {
        $sql = "SELECT * from tbl_kelompok_kegiatan where rt = '$rt' ";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function addDataKelKegM()
    {
        $data = [
            "kepala_keluarga"               => $this->input->post('kepala_keluarga'),
            "jumlah_anggota_keluarga"       => $this->input->post('jumlah_anggota_keluarga'),
            "bkb"                           => $this->input->post('bkb'),
            "bkr"                           => $this->input->post('bkr'),
            "bkl"                           => $this->input->post('bkl'),
            "uppks"                         => $this->input->post('uppks'),
            "pik_r"                         => $this->input->post('pik_r'),
            "rt"                            => $this->input->post('rt')
        ];

        $this->db->insert('tbl_kelompok_kegiatan', $data);
    }

    public function deleteDataKelKegM($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_kelompok_kegiatan');
    }

    public function editDataKelKegM($id)
    {
        $data = [
            "kepala_keluarga"               => $this->input->post('kepala_keluarga'),
            "jumlah_anggota_keluarga"       => $this->input->post('jumlah_anggota_keluarga'),
            "bkb"                           => $this->input->post('bkb'),
            "bkr"                           => $this->input->post('bkr'),
            "bkl"                           => $this->input->post('bkl'),
            "uppks"                         => $this->input->post('uppks'),
            "pik_r"                         => $this->input->post('pik_r'),
            "rt"                            => $this->input->post('rt')
        ];

        $this->db->where('id', $id);
        $this->db->update('tbl_kelompok_kegiatan', $data);
    }

    public function countBKB($rt)
    {
        $sql = "SELECT Count(bkb) as jumlahbkb from tbl_kelompok_kegiatan where bkb ='ya' and rt='$rt' ";
        $result = $this->db->query($sql);
        return $result->row_array();
    }

    public function countBKR($rt)
    {
        $sql = "SELECT Count(bkr) as jumlahbkr from tbl_kelompok_kegiatan where bkr ='ya' and rt='$rt' ";
        $result = $this->db->query($sql);
        return $result->row_array();
    }

    public function countBKL($rt)
    {
        $sql = "SELECT Count(bkl) as jumlahbkl from tbl_kelompok_kegiatan where bkl ='ya' and rt='$rt' ";
        $result = $this->db->query($sql);
        return $result->row_array();
    }

    public function countUPPKS($rt)
    {
        $sql = "SELECT Count(uppks) as jumlahuppks from tbl_kelompok_kegiatan where uppks ='ya' and rt='$rt' ";
        $result = $this->db->query($sql);
        return $result->row_array();
    }

    public function countPIKR($rt)
    {
        $sql = "SELECT Count(pik_r) as jumlahpikr from tbl_kelompok_kegiatan where pik_r ='ya' and rt='$rt' ";
        $result = $this->db->query($sql);
        return $result->row_array();
    }


    public function getDataRentangUsiabyRt($rt)
    {
        $sql = "SELECT * from tbl_rentang_usia where rt = '$rt' ";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function addDataRentangUsiaM()
    {
        $data = [
            "umur"               => $this->input->post('umur'),
            "laki_laki"          => $this->input->post('laki_laki'),
            "perempuan"          => $this->input->post('perempuan'),
            "rt"                 => $this->input->post('rt')
        ];

        $this->db->insert('tbl_rentang_usia', $data);
    }

    public function deleteDataRentangUsiaM($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_rentang_usia');
    }

    public function editDataRentangUsiaM($id)
    {
        $data = [
            "umur"               => $this->input->post('umur'),
            "laki_laki"          => $this->input->post('laki_laki'),
            "perempuan"          => $this->input->post('perempuan'),
            "rt"                 => $this->input->post('rt')
        ];

        $this->db->where('id', $id);
        $this->db->update('tbl_rentang_usia', $data);
    }

    public function getDataWargabyRt($rt)
    {
        $sql = "SELECT * from tbl_data_warga where rt = '$rt' ";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function addDataWargaM()
    {
        $data = [
            "nik"                   => $this->input->post('nik'),
            "nama"                  => $this->input->post('nama'),
            "tanggal_lahir"         => $this->input->post('tanggal_lahir'),
            "jenis_kelamin"         => $this->input->post('jenis_kelamin'),
            "bpjs"                  => $this->input->post('bpjs'),
            "status"                => $this->input->post('status'),
            "no_kk"                 => $this->input->post('no_kk'),
            "rt"                    => $this->input->post('rt')
        ];

        $this->db->insert('tbl_data_warga', $data);
    }

    public function deleteDataWargaM($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_data_warga');
    }

    public function editDataWargaM($id)
    {
        $data = [
            "nik"                   => $this->input->post('nik'),
            "nama"                  => $this->input->post('nama'),
            "tanggal_lahir"         => $this->input->post('tanggal_lahir'),
            "jenis_kelamin"         => $this->input->post('jenis_kelamin'),
            "bpjs"                  => $this->input->post('bpjs'),
            "status"                => $this->input->post('status'),
            "no_kk"                 => $this->input->post('no_kk'),
            "rt"                    => $this->input->post('rt')
        ];

        $this->db->where('id', $id);
        $this->db->update('tbl_data_warga', $data);
    }
}
