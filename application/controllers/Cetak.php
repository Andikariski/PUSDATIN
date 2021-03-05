<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Admin_model');
        $this->load->Model('Login_model');
        $this->load->library('pdf');
        $this->load->library('form_validation');
    }

    public function dataPUSByRt($rt)
    {
        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->SetTitle('Cetak Data PUS');
        $pdf->AddPage();
        $pdf->Ln();
        // $pdf->Image('./assets/img/logo/logo.png', 17, 10, -350);
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(190, 9, 'DATA PUS DAN KESERTAAN KB', 0, 1, 'C');


        $pdf->SetFont('Arial', '', 10);

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(190, 7, 'TAHUN ' . date('Y'), 0, 1, 'C');

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 2, '__________________________________________________________________________', 0, 1, 'C');
        $pdf->Ln(4);

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(190, 10, 'RT 0' . $rt, 0, 1, 'C');

        $pdf->Ln(4);
        $pdf->Cell(10, 6, '', 0, 10, 'C');
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(8, 6, 'NO', 1, 0, 'C');
        $pdf->Cell(30, 6, 'NAMA ISTRI', 1, 0, 'C');
        $pdf->Cell(32, 6, 'NAMA SUAMI', 1, 0, 'C');
        $pdf->Cell(27, 6, 'TTL ISTRI', 1, 0, 'C');
        $pdf->Cell(25, 6, 'JUMLAH ANAK', 1, 0, 'C');
        $pdf->Cell(40, 6, 'UMUR ANAK TERKECIL', 1, 0, 'C');
        $pdf->Cell(25, 6, 'KESERTAAN KB', 1, 1, 'C');


        $data = $this->Admin_model->getDatabyRt($rt);

        $i = 1;
        $pdf->SetFont('Arial', '', 8);
        foreach ($data as $p) {
            $pdf->Cell(8, 6, $i, 1, 0, 'C');
            $pdf->Cell(30, 6, $p['nama_istri'], 1, 0, '');
            $pdf->Cell(32, 6, $p['nama_suami'], 1, 0, '');
            $pdf->Cell(27, 6, date('d F Y', strtotime($p['ttl_istri'])), 1, 0, 'C');
            $pdf->Cell(25, 6, $p['jumlah_anak'], 1, 0, 'C');
            $pdf->Cell(40, 6, $p['umur_anak_terkecil'], 1, 0, 'C');
            $pdf->Cell(25, 6, $p['kesertaan_kb'], 1, 1, 'C');
            $i++;
        }

        $pdf->Output('I', 'Data PUS dan Kesertaan KB RT ' . $rt, '');
    }


    public function dataKelKegyRt($rt)
    {
        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->SetTitle('Cetak Data kelompok Kegiatan');
        $pdf->AddPage();
        $pdf->Ln();
        // $pdf->Image('./assets/img/logo/logo.png', 17, 10, -350);
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(190, 9, 'DATA KELOMPOK KEGIATAN', 0, 1, 'C');


        $pdf->SetFont('Arial', '', 10);

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(190, 7, 'TAHUN ' . date('Y'), 0, 1, 'C');

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 2, '__________________________________________________________________________', 0, 1, 'C');
        $pdf->Ln(4);

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(190, 10, 'RT 0' . $rt, 0, 1, 'C');


        $pdf->Ln(4);
        $pdf->Cell(10, 6, '', 0, 10, 'C');
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(8, 6, 'NO', 1, 0, 'C');
        $pdf->Cell(40, 6, 'KEPALA KELUARGA', 1, 0, 'C');
        $pdf->Cell(45, 6, 'JUMLAH ANGGOTA KELUARGA', 1, 0, 'C');
        $pdf->Cell(19, 6, 'BKB', 1, 0, 'C');
        $pdf->Cell(19, 6, 'BKR', 1, 0, 'C');
        $pdf->Cell(19, 6, 'BKL', 1, 0, 'C');
        $pdf->Cell(19, 6, 'UPPKS', 1, 0, 'C');
        $pdf->Cell(19, 6, 'PIK-R', 1, 1, 'C');


        $bkb    = $this->Admin_model->countBKB($rt);
        $bkr    = $this->Admin_model->countBKR($rt);
        $bkl    = $this->Admin_model->countBKL($rt);
        $uppks  = $this->Admin_model->countUPPKS($rt);
        $pikr   = $this->Admin_model->countPIKR($rt);
        $data   = $this->Admin_model->getDataKelKegbyRt($rt);


        $i = 1;
        $pdf->SetFont('Arial', '', 8);
        foreach ($data as $p) {
            $pdf->Cell(8, 6, $i, 1, 0, 'C');
            $pdf->Cell(40, 6, $p['kepala_keluarga'], 1, 0, '');
            $pdf->Cell(45, 6, $p['jumlah_anggota_keluarga'], 1, 0, 'C');
            if ($p['bkb'] == 'ya') {
                $pdf->Cell(19, 6, 'V', 1, 0, 'C');
            } else {
                $pdf->Cell(19, 6, '', 1, 0, 'C');
            }

            if ($p['bkr'] == 'ya') {
                $pdf->Cell(19, 6, 'V', 1, 0, 'C');
            } else {
                $pdf->Cell(19, 6, '', 1, 0, 'C');
            }

            if ($p['bkl'] == 'ya') {
                $pdf->Cell(19, 6, 'V', 1, 0, 'C');
            } else {
                $pdf->Cell(19, 6, '', 1, 0, 'C');
            }

            if ($p['uppks'] == 'ya') {
                $pdf->Cell(19, 6, 'V', 1, 0, 'C');
            } else {
                $pdf->Cell(19, 6, '', 1, 0, 'C');
            }

            if ($p['pik_r'] == 'ya') {
                $pdf->Cell(19, 6, 'V', 1, 1, 'C');
            } else {
                $pdf->Cell(19, 6, '', 1, 0, 'C');
            }
            // $pdf->Cell(19, 6, $bkr['jumlahbkr'], 1, 1, 'C');

            $i++;
        }
        $pdf->Cell(43, 10, 'Jumlah Kelompok Kegiatan BKB    :', 0, 1, 'C');
        $pdf->Cell(95, -10, $bkb['jumlahbkb'], 0, 1, 'C');

        $pdf->Cell(43, 20, 'Jumlah Kelompok Kegiatan BKR    :', 0, 1, 'C');
        $pdf->Cell(95, -20, $bkr['jumlahbkr'], 0, 1, 'C');

        $pdf->Cell(43, 30, 'Jumlah Kelompok Kegiatan BKL    :', 0, 1, 'C');
        $pdf->Cell(95, -30, $bkl['jumlahbkl'], 0, 1, 'C');

        $pdf->Cell(45, 40, 'Jumlah Kelompok Kegiatan UPPKS  :', 0, 1, 'C');
        $pdf->Cell(95, -40, $uppks['jumlahuppks'], 0, 1, 'C');

        $pdf->Cell(43, 50, 'Jumlah Kelompok Kegiatan PIK-R  :', 0, 1, 'C');
        $pdf->Cell(95, -50, $pikr['jumlahpikr'], 0, 1, 'C');

        $pdf->Output('I', 'Data Kelompok Kegiatan RT' . $rt, '');
    }

    public function dataRentangUsiabyRt($rt)
    {
        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->SetTitle('Cetak Data Jumlah KK dan Jumlah Jiwa');
        $pdf->AddPage();
        $pdf->Ln();
        // $pdf->Image('./assets/img/logo/logo.png', 17, 10, -350);
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(190, 9, 'Data Jumlah KK dan Jumlah Jiwa Menurut', 0, 1, 'C');


        $pdf->SetFont('Arial', '', 10);

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(190, 7, 'TAHUN ' . date('Y'), 0, 1, 'C');

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 2, '_____________________________________________________________________________', 0, 1, 'C');
        $pdf->Ln(4);

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(190, 10, 'RT 0' . $rt, 0, 1, 'C');

        $pdf->Ln(4);
        $pdf->Cell(10, 6, '', 0, 10, 'C');
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(8, 6, 'NO', 1, 0, 'C');
        $pdf->Cell(60, 6, 'RENTANG UMUR', 1, 0, 'C');
        $pdf->Cell(60, 6, 'JUMLAH LAKI LAKI', 1, 0, 'C');
        $pdf->Cell(60, 6, 'JUMLAH PEREMPUAN', 1, 1, 'C');


        $data = $this->Admin_model->getDataRentangUsiabyRt($rt);
        $i = 1;
        $pdf->SetFont('Arial', '', 8);
        foreach ($data as $p) {
            $pdf->Cell(8, 6, $i, 1, 0, 'C');
            $pdf->Cell(60, 6, $p['umur'] . ' Tahun', 1, 0, 'C');
            $pdf->Cell(60, 6, $p['laki_laki'], 1, 0, 'C');
            $pdf->Cell(60, 6, $p['perempuan'], 1, 1, 'C');
            $i++;
        }
        $pdf->Output('I', 'Data Jumlah KK dan Jumlah Jiwa Menurut ' . $rt, '');
    }

    public function dataWargabyRt($rt)
    {
        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->SetTitle('Cetak Data Warga');
        $pdf->AddPage();
        $pdf->Ln();
        // $pdf->Image('./assets/img/logo/logo.png', 17, 10, -350);
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(190, 9, 'Data Warga Dusun Ngajaran', 0, 1, 'C');


        $pdf->SetFont('Arial', '', 10);

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(190, 7, 'TAHUN ' . date('Y'), 0, 1, 'C');

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 2, '_____________________________________________________________________________', 0, 1, 'C');
        $pdf->Ln(4);

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(190, 10, 'RT 0' . $rt, 0, 1, 'C');

        $pdf->Ln(4);
        $pdf->Cell(10, 6, '', 0, 10, 'C');
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(8, 6, 'NO', 1, 0, 'C');
        $pdf->Cell(30, 6, 'NIK', 1, 0, 'C');
        $pdf->Cell(35, 6, 'NAMA', 1, 0, 'C');
        $pdf->Cell(30, 6, 'TANGGAL LAHIR', 1, 0, 'C');
        $pdf->Cell(10, 6, 'UMUR', 1, 0, 'C');
        $pdf->Cell(25, 6, 'JENIS KELAMIN', 1, 0, 'C');
        $pdf->Cell(25, 6, 'BPJS', 1, 0, 'C');
        $pdf->Cell(30, 6, 'NO KK', 1, 1, 'C');


        $data = $this->Admin_model->getDataWargabyRt($rt);
        $i = 1;
        $pdf->SetFont('Arial', '', 8);
        foreach ($data as $p) {
            $pdf->Cell(8, 6, $i, 1, 0, 'C');
            $pdf->Cell(30, 6, $p['nik'], 1, 0, 'C');
            $pdf->Cell(35, 6, $p['nama'], 1, 0, 'C');
            $pdf->Cell(30, 6, $p['tanggal_lahir'], 1, 0, 'C');
            $pdf->Cell(10, 6, date('Y') -  substr($p['tanggal_lahir'], 0, 4), 1, 0, 'C');
            $pdf->Cell(25, 6, $p['jenis_kelamin'], 1, 0, 'C');
            $pdf->Cell(25, 6, $p['bpjs'], 1, 0, 'C');
            $pdf->Cell(30, 6, $p['no_kk'], 1, 1, 'C');
            $i++;
        }
        $pdf->Output('I', 'Data Jumlah KK dan Jumlah Jiwa Menurut ' . $rt, '');
    }
}
