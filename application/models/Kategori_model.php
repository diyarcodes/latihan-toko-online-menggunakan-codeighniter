<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    public function getAllDataKategori()
    {
        return $this->db->get_where('tb_barang', ['kategori' => 'Elektronik'])->result_array();
    }

    public function getAllDataPakaianPria()
    {
        return $this->db->get_where('tb_barang', ['kategori' => 'Pakaian Pria'])->result_array();
    }

    public function getAllDataPakaianWanita()
    {
        return $this->db->get_where('tb_barang', ['kategori' => 'Pakaian Wanita'])->result_array();
    }

    public function getAllDataPakaianAnakAnak()
    {
        return $this->db->get_where('tb_barang', ['kategori' => 'Pakaian Anak-anak'])->result_array();
    }

    public function getAllDataPeralatanOlahraga()
    {
        return $this->db->get_where('tb_barang', ['kategori' => 'Peralatan Olahraga'])->result_array();
    }
}
