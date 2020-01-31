<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Toko Online';
        $data['barang'] = $this->Toko_model->getAllBarang();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_ke_keranjang($id)
    {
        $barang = $this->Toko_model->getAllBarangById($id);

        $data = [
            'id' => $barang['id_brg'],
            'qty' => 1,
            'price' => $barang['harga'],
            'name' => $barang['nama_brg']
        ];

        $this->cart->insert($data);
        redirect('Dashboard');
    }

    public function detail_keranjang()
    {
        $data['judul'] = 'Keranjang';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }
}
