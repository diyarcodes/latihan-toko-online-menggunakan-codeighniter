<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function elektronik()
    {
        $data['judul'] = 'Barang Elektronik';
        $data['elektronik'] = $this->Kategori_model->getAllDataKategori();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('elektronik', $data);
        $this->load->view('templates/footer');
    }

    public function pakaianPria()
    {
        $data['judul'] = 'Pakaian Pria';
        $data['pakaianPria'] = $this->Kategori_model->getAllDataPakaianPria();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_pria', $data);
        $this->load->view('templates/footer');
    }

    public function pakaianWanita()
    {
        $data['judul'] = 'Pakaian Wanita';
        $data['pakaianWanita'] = $this->Kategori_model->getAllDataPakaianWanita();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_wanita', $data);
        $this->load->view('templates/footer');
    }

    public function pakaianAnakAnak()
    {
        $data['judul'] = 'Pakaian Anak-anak';
        $data['pakaianAnakAnak'] = $this->Kategori_model->getAllDataPakaianAnakanak();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_anak_anak', $data);
        $this->load->view('templates/footer');
    }

    public function peralatanOlahraga()
    {
        $data['judul'] = 'Peralatan Olahraga';
        $data['peralatanOlahraga'] = $this->Kategori_model->getAllDataPeralatanOlahraga();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('peralatan_olahraga', $data);
        $this->load->view('templates/footer');
    }
}
