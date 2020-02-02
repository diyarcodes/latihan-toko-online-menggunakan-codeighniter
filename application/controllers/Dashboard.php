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

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('Dashboard');
    }

    public function pembayaran()
    {
        $data['judul'] = 'Pembayaran';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->Invoice_model->index();
        $data['judul'] = 'Proses Pemesanan';

        if ($is_processed) {
            $this->cart->destroy();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf, Pesanan Anda Gagal Diproses";
        }
    }

    public function detail_barang($id)
    {
        $data['judul'] = 'Detail Barang';
        $data['barang'] = $this->Toko_model->getAllBarangById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('detail_barang');
        $this->load->view('templates/footer');
    }
}
