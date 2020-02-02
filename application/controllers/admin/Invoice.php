<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Invoice';
        $data['invoice'] = $this->Invoice_model->getAllData();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/invoice', $data);
        $this->load->view('templates_admin/footer');
    }

    public function detail($id_invoice)
    {
        $data['judul'] = 'Detail Pemesanan';
        $data['invoice'] = $this->Invoice_model->getAllDataByIDInvoice($id_invoice);
        $data['pesanan'] = $this->Invoice_model->getAllDataByIDPesanan($id_invoice);

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_invoice', $data);
        $this->load->view('templates_admin/footer');
    }
}
