<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice_model extends CI_Model
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');

        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y')))
        ];

        $this->db->insert('tb_invoice', $data);
        $id_invoice = $this->db->insert_id();

        foreach ($this->cart->contents() as $item) {
            $data = [
                'id_invoice' => $id_invoice,
                'id_brg' => $item['id'],
                'nama_brg' => $item['name'],
                'jumlah' => $item['qty'],
                'harga' => $item['price']
            ];

            $this->db->insert('tb_pesanan', $data);
        }

        return true;
    }

    public function getAllData()
    {
        return $this->db->get('tb_invoice')->result_array();
    }

    public function getAllDataByIDInvoice($id_invoice)
    {
        return $this->db->get_where('tb_invoice', ['id' => $id_invoice])->row_array();
    }

    public function getAllDataByIDPesanan($id_invoice)
    {
        return $this->db->get_where('tb_pesanan', ['id_invoice' => $id_invoice])->result_array();
    }
}
