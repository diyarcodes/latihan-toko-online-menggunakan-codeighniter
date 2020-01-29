<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_barang extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Data Barang';
        $data['barang'] = $this->Toko_model->getAllBarang();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahDatabarang()
    {
        $this->Toko_model->tambahDataBarang();
        redirect('admin/Data_barang');
    }
}
